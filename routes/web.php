<?php

use App\Http\Controllers\account;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\certifcate;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DiplomaController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\homepage;
use App\Http\Controllers\inst;
use App\Http\Controllers\mycourses;
use App\Http\Controllers\settings;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\regst;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */
Auth::routes();
Route::get('/home', function () {
    return view('index');
})->name('home.index');
Route::controller(homepage::class)->group(function (){
    Route::get('/','index')->name('home.index');
    Route::get('/search','search')->name('search.index');

});
Route::controller(inst::class)->group(function (){
    Route::get('/instrcutors','index')->name('inst.index');

});




Route::get('/about', function () {
    return view('about');
})->name('about.index');

Route::controller(trackController::class)->group(function () {
    Route::get('/tracks', 'index')->name('track.index');
    Route::get('/tracks/course/{id}', 'show')->name('courses.index');
});
Route::controller(diplomaController::class)->group(function () {
    Route::get('/diploma', 'index')->name('diploma.index');
    Route::get('/diploma/roadmap/{id}', 'show')->name('roadmap.index');
});
Route::controller(courseController::class)->group(function () {
    Route::get('/course/{id}', 'index')->name('lesson.index');
    Route::get('join/{id}', 'enroll')->name('enroll')->middleware('auth');
});

// authentication routes
Route::middleware('auth')->group(function () {
    Route::controller(videoController::class)->group(function () {
        Route::get('/view/{name}/{id}', 'show')->name('show.index');
        Route::get('/lesson/{id}', 'index')->name('view.index');
        Route::get('/lesson/{courseId}/{videoId}', 'show')->name('video.showOne');
    });
    Route::controller(account::class)->group(function (){
        Route::get('/my_account','index')->name('account.index');

    });
    Route::controller(settings::class)->group(function (){
        Route::get('/account_settings','index')->name('settings.index');
        Route::post('/account_settings','update')->name('update.index');

    });
    Route::controller(certifcate::class)->group(function (){
        Route::get('/my_certifcates','index')->name('cer.index');
        Route::get('/my_certifcates/{id}','send')->name('send.index');
        Route::get('/my_certifcate/{path}','mail')->name('mail.index');


    });
    Route::controller(mycourses::class)->group(function (){
        Route::get('/my_courses','index')->name('my_courses.index');

    });

    Route::post('/dd',[homepage::class,'contact'])->name('contact.index');

    Route::controller(ExamController::class)->group(function () {
        Route::get('myexam/{id}/{ques_num}', 'index')->name('exam.show')->middleware('done');
        Route::post('myexam/{id}/{ques_num}/save', 'saveAnswer')->name('exam.save');
        Route::get('myexam/{id}/{ques_num}/next', 'next')->name('exam.next');
        Route::get('myexam/{id}/{ques_num}/previous', 'previous')->name('exam.previous');
        Route::post('/myexam/save_answers/{courseId}', 'saveAnswers')->name('exam.save_answers');
        Route::get('myexam/score/{courseId}', function () {
            $myCourses = Mycourses::where('userId', auth()->user()->id)->get();
            return view('exam.score')->with('degree', $myCourses);
        })->name('exam.score');

    });
});
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::post('/reg', [regst::class, 'create'])->name('reg.index');
