<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mycourses extends Model
{
    use HasFactory;
    protected $table = 'my_courses';
    protected $fillable = [
        'name',
        'status',
        'userId',
        'courseId',
    ];

    public function courses()
    {
        return $this->belongsTo(course::class, 'courseId');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

}
