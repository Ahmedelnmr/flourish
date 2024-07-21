<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settings extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('account pages.setting', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $user->firstname = $request->input('first_name');
        $user->lastname = $request->input('last_name');
        $user->age = $request->input('age');
        $user->address = $request->input('address');
        if ($request->hasFile('img')) {
            $originalName = $request->file('img')->getClientOriginalName();
            $path = $request->file('img')->storeAs('assets/imgs', $originalName, 'public');
            $user->image_path = $path;
        }

        $user->save();
        // بعد حفظ المستخدم
        return redirect()->back()->with('message', 'تم تحديث البيانات بنجاح.');


    }
}
