<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(request $request)
    {
        \App\Models\User::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->laststname,
            'email'=>$request->email,
            'password'=>$request->password,

        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
