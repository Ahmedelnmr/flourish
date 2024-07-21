<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $fillable=['name','path','duration','course_id'];
    public function course()
    {
        return $this->belongsTo(course::class,'course_id');
    }
    public function progresses()
    {
        return $this->hasMany(video_progress::class);
    }
}
