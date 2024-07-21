<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $table = 'questions';
    protected $fillable = [
        'question',
        'status',
        'exam_id',
        'correct_answer',
    ];
    public function exam()
    {
        return $this->belongsTo(exam::class, 'exam_id');
    }
    public function answer()
    {
        return $this->hasMany(answer::class, 'question_id');
    }
    use HasFactory;
}
