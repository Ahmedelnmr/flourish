<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use App\Models\course;
use App\Models\diploma;
use App\Models\track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class homepage extends Controller
{
    public function index()
    {
        $posts = course::take(6)->get();
        $postss = diploma::take(6)->get();
       return view('index', compact('posts','postss'));
    }

    public function contact(request $request)
    {
        $post=$request->all();
        Mail::to('ahmedelnmet011@gmail.com')->send(new contact($post));
        return back()->with('success', 'تم إرسال البريد الإلكتروني بنجاح!');


    }
    public function search(Request $request)
    {
        $search = $request->input('keyword');
        $results = course::where('name', 'like', "%$search%")->get();

        return view('test', ['results' => $results]);
    }



}
