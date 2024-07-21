<?php

namespace App\Http\Controllers;

use App\Models\diploma;
use Illuminate\Http\Request;

class DiplomaController extends Controller
{

    public function index()
    {
        $diploma = diploma::paginate(9);
        return view('tracks', compact('diploma'));
    }
    public function show($id)
    {
        $road = diploma::findOrFail($id);
$roadmaps = $road->course()->paginate(6);
$roadmapCount = $road->course()->count();
return view('course page.roadmap', compact('roadmaps', 'roadmapCount', 'road'));


    }
}
