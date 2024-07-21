<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rel_course extends Model
{
    public function course()
    {
        return $this->belongsTo(rel_course::class, 'course_id');
    }
    use HasFactory;
}
