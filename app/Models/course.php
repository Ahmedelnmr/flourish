<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{

    protected $table = 'courses';
    protected $fillable = [
        'name',
        'image',
        'descraption',
        'ins_name',
        'num_lec',
        'duartion'
    ];
    public function track()
    {
        return $this->belongsToMany(track::class, 'traccourse_pivot');
    }
    public function diploma()
    {
        return $this->belongsToMany(diploma::class, 'diolmaccourse_pivot');
    }
    public function video()
    {
        return $this->hasMany(video::class, 'course_id');
    }
    public function exam()
    {
        return $this->hasOne(exam::class, 'course_id');
    }

    public function mycourses()
    {
        return $this->hasMany(Mycourses::class, 'courseId');
    }
    public function certifacte()
    {
        return $this->hasOne(certifacte::class, 'course_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'my_courses', 'courseId', 'userId');
    }
    public function progresses()
    {
        return $this->hasMany(TempVideo::class, 'video_id');
    }
    public function rel()
    {
        return $this->hasMany(rel_course::class, );
    }
    use HasFactory;
}
