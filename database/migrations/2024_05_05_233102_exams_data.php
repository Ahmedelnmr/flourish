<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        DB::statement("CREATE VIEW examsData as
        SELECT exams.id as id , exams.name as examName , exams.course_id as course_id , questions.id quesId , questions.ques_num as ques_num , questions.question as questionName  , questions.status as correctStatus , questions.exam_id as examId , answers.id as answerId ,  answers.correct_answer as correctAns , answers.choose1 as chose1 , answers.choose2 as chose2 , answers.choose3 as chose3 , answers.choose4 as chose4  FROM `exams` JOIN questions JOIN answers on ( exams.id = questions.exam_id AND questions.id = answers.question_id );");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('examsData');
    }
};
