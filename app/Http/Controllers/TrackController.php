<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\diploma;
use App\Models\track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index()
    {
        $tracks = track::paginate(9);
        return view('courses', compact('tracks'));
    }
    public function show($id)
    {
        $track = Track::findOrFail($id);
        $courses = $track->course()->paginate(6);
        return view('course page.course-details', compact('courses','track'));

    }
}
