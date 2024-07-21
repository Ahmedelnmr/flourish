<?php

namespace App\Http\Controllers;
use App\Models\certifacte;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
require_once base_path('vendor/ar-php/ar-php/src/I18N/Arabic.php');
use I18N_Arabic as Arabic;

class certifcate extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $cerfs= certifacte::all();
        return view('account pages.certifacte',compact('cerfs','user'));

    }
    public function send($id)
    {
        $post=course::find($id);
        $user = auth()->user();
        $name = $post->name;
        // تحقق من وجود السجل قبل إنشائه
        $existingCertificate = certifacte::where('name', $post->name)
            ->where('userid', $user->id)
            ->first();

        if (!$existingCertificate) {
            certifacte::create([

                'name' => $post->name,
                'image_path' => 'assets/cer/' . $name . '.jpg',
                'userid'=> $user->id
            ]);
        }
        $cerfs= certifacte::all();

        header('content-type:image/jpeg');
        $font = public_path('assets/imgs/Sukar-Black.ttf');
        $image = imagecreatefromjpeg(public_path('assets/imgs/ahmedd.jpg'));
        $color = imagecolorallocate($image, 19, 21, 22);
        $firstName = $user->firstname;
        $lastName = $user->lastname;
        $name = $firstName . $lastName;
        $arabic = new Arabic('Glyphs');
        $name = $arabic->utf8Glyphs($name);


        imagettftext($image, 100, 0, 550, 740, $color, $font, $name);
        $postName = $arabic->utf8Glyphs($post->name);
        imagettftext($image, 100, 0, 740, 1000, $color, $font, $postName);
        $date = \Carbon\Carbon::now();
        $dateWithoutTime = $date->toDateString();
        imagettftext($image, 50, 0, 1320, 1230, $color, public_path('assets/imgs/SC_LUJAYN.ttf'),$dateWithoutTime);
        $insName = $arabic->utf8Glyphs($post->ins_name);

        imagettftext($image, 60, 0, 420, 1240, $color, public_path('assets/imgs/Sukar-Black.ttf'), $insName);
        $path=public_path('assets/cer/'.$post->name.'.jpg');
        imagejpeg($image,$path);
        imagedestroy($image);
        return view('account pages.certifacte',compact('cerfs','user'));

    }
    public function mail($path)
    {
        $data['email']='ahmedelnmet011@gmail.com';
        $data['title']='ceritifcate';
        $data['body']='he was mad';
        $files=[public_path('assets/cer/'.$path.'.jpg')];
        Mail::send('mail.cer',$data,function ($message)use ($data,$files)
        {
            $message->to($data['email'])->subject($data['title']);
            foreach ($files as $file)
            {
                $message->attach($file);
            }

        });
        return back()->with('success', 'تم إرسال البريد الإلكتروني بنجاح!');
    }

}
