<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\Mycourses;
use App\Models\video;
use FFMpeg\FFMpeg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    public function index($id)
    {



        $videos = Course::find($id)->video;
        if (count($videos) === 0) {
            return view('course page.null');
        }
        else {


            foreach ($videos as $video) {
                // $ffmpeg = FFMpeg::create([
                //     'ffmpeg.binaries' => 'C:/path/ffmpeg.exe',
                //     'ffprobe.binaries' => 'C:/path/ffprobe.exe'
                // ]);

                $videoPath = public_path($video->path);
                // $videoFile = $ffmpeg->open($videoPath);
                // $durationInSeconds = $videoFile->getFormat()->get('duration');

                // // تحويل مدة الفيديو إلى الدقائق
                // $durationInMinutes = gmdate("h:i:s", $durationInSeconds);

                Video::where('id', $video->id)->update([
                    'name' => $video->name,
                    'path' => $video->path,

                ]);
            }


            $course = Course::find($id);
            $video = $course->video; // لا تحتاج إلى استخدام find مرتين
            $allCourses = Mycourses::where('courseId', $id)->get();

            $isJoined = false;

            // تحقق من حالة الكورس
            foreach ($allCourses as $myCourse) {
                if ($myCourse->status === 'joind') {
                    $isJoined = true;
                    break; // إذا وجدنا حالة joined لا نحتاج إلى الاستمرار في التحقق
                }
            }

            return view('course page.lesson', compact('course', 'video', 'isJoined','allCourses'));
        }
    }

    public function enroll($id)
    {
        $search = [];
        $course = course::find($id);
        $video = course::find($id)->video;
        $allCourses = Mycourses::where('courseId', '', $id)->get();


        foreach ($allCourses as $data) {
            if ($data->status == 'joind' && $data->coursId == $id && $data->userId == auth()->user()->id) {
                $search[] = 'join';
                break;
            }
        }

        if (!empty($search)) {
            return redirect()->back()->with(['course' => $course, 'video' => $video, 'allCourses' => $allCourses]);
        } else {
            $mycourses = new Mycourses();
            $mycourses->name = $course->name;
            $mycourses->status = 'joind';
            $mycourses->userId = auth()->user()->id;
            $mycourses->courseId = $id;
            $mycourses->save();
            return redirect()->back()->with(['course' => $course, 'video' => $video, 'allCourses' => $allCourses]);
        }



    }


}
