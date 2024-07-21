<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ExamResults;
use App\Models\Mycourses;
use App\Models\question;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index($id, $ques_num)
    {

        $lastQuestionNum = 10;

        $course = Course::find($id);
        $examData = DB::table('questions')->where('courseId', $id)
            ->where('ques_num', $ques_num)
            ->get();

        $examId = $examData->pluck('id');

        foreach ($examData as $data) {
            $numQues = $data->ques_num;
        }

        $answers = DB::table('answers')->where('question_id', $examId)->get();
        return view('exam.exam')->with([
            'course' => $course,
            'examData' => $examData,
            'answers' => $answers,
            'numQues' => $numQues,
            'lastQuestionNum' => $lastQuestionNum,

            // Pass previous answer to the view
        ]);


    }

    public function next($id, $ques_num)
    {

        $nextQuestionNum = $ques_num + 1;
        $examData = DB::table('questions')->where('courseId', $id)
            ->where('ques_num', $nextQuestionNum)
            ->first();
        if ($examData) {
            return redirect()->route('exam.show', ['id' => $id, 'ques_num' => $nextQuestionNum]);
        } else {
            return redirect()->route('exam.show', ['id' => $id, 'ques_num' => $ques_num]);
        }
    }

    public function previous($id, $ques_num)
    {


        $prevQuestionNum = $ques_num - 1;
        if ($prevQuestionNum >= 1) {
            return redirect()->route('exam.show', ['id' => $id, 'ques_num' => $prevQuestionNum]);
        } else {
            return redirect()->route('exam.show', ['id' => $id, 'ques_num' => $ques_num]);
        }
    }


    public function saveAnswers(Request $request, $courseId)
    {
        $selectedAnswers = $request->input('selectedAnswers');
        $userId = auth()->user()->id;
        $degree = 0;

        // If no answers are selected, save empty values for each question
        if (empty($selectedAnswers)) {
            for ($quesNum = 1; $quesNum <= 10; $quesNum++) {
                ExamResults::create([
                    'answer' => '',
                    'userId' => $userId,
                    'courseId' => $courseId,
                    'ques_num' => $quesNum
                ]);
            }
        } else {
            // If answers are selected, save them
            foreach ($selectedAnswers as $quesNum => $answer) {
                ExamResults::create([
                    'answer' => $answer,
                    'userId' => $userId,
                    'courseId' => $courseId,
                    'ques_num' => $quesNum
                ]);
            }
        }
        $allQuestions = question::where('courseId', $courseId)->get();

        foreach ($allQuestions as $question) {
            $questionNumber = $question->ques_num;
            $correctAnswer = $question->correctAns;

            if (isset($selectedAnswers[$questionNumber]) && $selectedAnswers[$questionNumber] == $correctAnswer) {
                $degree++;
            }
        }
        $myCourses = Mycourses::where('courseId', $courseId)->where('userId', $userId)->get();
        foreach ($myCourses as $course) {
            $course->exam_score = $degree;
            $course->exam_status = 'done';
            $course->save();
        }

        return response()->json('Answerd Saved Success');
    }




}

