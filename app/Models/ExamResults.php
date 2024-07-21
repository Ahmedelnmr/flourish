<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResults extends Model
{
    use HasFactory;
    protected $table = 'exam_results';
    protected $fillable = [
        'answer',
        'userId',
        'courseId',
        'ques_num'
    ];
}

