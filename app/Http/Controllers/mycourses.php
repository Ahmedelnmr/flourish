<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\TempVideo;
use App\Models\video_progress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class mycourses extends Controller
{
    public function index()
    {
        $userCoursesIds = DB::table('my_courses')
            ->where('userId', Auth::id())
            ->pluck('courseId');

        $userCoursesDetails = [];
        foreach ($userCoursesIds as $courseId) {
            $course = Course::with('video')->find($courseId);
            if ($course) {
                $course->progress = $this->calculateCourseProgress($course);
                $userCoursesDetails[] = $course;
            }
        }

        return view('account pages.courses', compact('userCoursesDetails'));
    }

    private function calculateCourseProgress($course)
    {
        $userId = Auth::id();
        $totalVideos = $course->video->count();

        // عدد الفيديوهات التي شاهدها المستخدم في هذا الكورس
        $watchedVideos = TempVideo::where('userId', $userId)
            ->where('courseId', $course->id)
            ->count();

        // حساب النسبة المئوية للتقدم
        return $totalVideos ? round(($watchedVideos / $totalVideos) * 100) : 0;
    }


}
