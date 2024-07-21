<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class account extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('account pages.account', ['user' => $user]);
    }

}
