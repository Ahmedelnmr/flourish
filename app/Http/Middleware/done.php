<?php

namespace App\Http\Middleware;

use App\Models\course;
use App\Models\Mycourses;
use App\Models\TempVideo;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Symfony\Component\HttpFoundation\Response;

class done
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $userId = auth()->id();
        $myCourse = Mycourses::where('userId', $userId)->first();

        if (!$myCourse || $myCourse->exam_status !== 'done') {
            return $next($request);
        } else {
            return response()->view('exam.score', ['degree' => $myCourse], 401);
        }

    }
}
