<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\Mycourses;
use App\Models\TempVideo;
use App\Models\video;
use Illuminate\Support\Facades\Request;

class VideoController extends Controller
{
    public function index($id)
    {
        $cours = Course::find($id);
        $relatedCourseNames = $cours->rel->pluck('rel_course');
        $relatedCourses = Course::whereIn('name', $relatedCourseNames)->get();
        $search = [];
        $course = Course::find($id);
        $videos = $course->video()->get();

        // here insert first video to temp video -- checking existing video name
        $videoData = TempVideo::all();
        $firstVideo = video::where("course_id", $id)->first();
        $allTempVideos = TempVideo::where("courseId", $id)->where("userId", auth()->user()->id)->get();
        $count = count($allTempVideos); // 3

        // هنا ببعت الداتا بتاعت كل الكورسات عشان اخفي زرار بدأ الامتحان
        $myCourses = Mycourses::where("userId", auth()->id())->where('courseId', $id)->get();

        if ($firstVideo) {
            foreach ($videoData as $video) {
                if ($video->name == $firstVideo->name && $video->userId == auth()->user()->id) {
                    $search[] = 'founded';
                    break;
                }
            }
        }

        if (empty($search)) {
            $tempVideo = new TempVideo();
            $tempVideo->name = $firstVideo->name;
            $tempVideo->userId = auth()->user()->id;
            $tempVideo->courseId = $firstVideo->course_id;
            $tempVideo->save();
            return view('course page.video', compact('videos', 'count', 'course', 'myCourses','relatedCourses'));

        }
        return view('course page.video', compact('videos', 'count', 'course', 'myCourses','relatedCourses'));
    }

    // function to show video
    public function show($courseId, $videoId)
    {
        $cours = Course::find($courseId);
        $relatedCourseNames = $cours->rel->pluck('rel_course');
        $relatedCourses = Course::whereIn('name', $relatedCourseNames)->get();
        $search = [];
        $video = video::where('id', $videoId)->where('course_id', $courseId)->firstOrFail();

        $videoData = TempVideo::all();
        foreach ($videoData as $tempVideo) {
            if ($tempVideo->name == $video->name && $tempVideo->userId == auth()->user()->id && $tempVideo->courseId == $courseId) {
                $search[] = 'founded';
                break;
            }
        }

        if (empty($search)) {
            $newTempVideo = new TempVideo();
            $newTempVideo->name = $video->name;
            $newTempVideo->userId = auth()->user()->id;
            $newTempVideo->courseId = $courseId;
            $newTempVideo->save();
            return view('course page.showOne', compact('video','relatedCourses'));
        }
        return view('course page.showOne', compact('video', 'relatedCourses'));

    }




}
