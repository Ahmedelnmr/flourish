<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    public function course()
    {
        return $this->belongsTo(course::class,'course_id');
    }
    public function question()
    {
        return $this->hasMany(question::class,'exam_id');
    }
    use HasFactory;
}
