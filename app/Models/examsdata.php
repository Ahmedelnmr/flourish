<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examsdata extends Model
{
    use HasFactory;
    protected $tabel="examsdata";

    protected $fillable=[
        'examName',
        'course_id',
        'quesId',
        'ques_num',
        'questionName',
        'correctStatus',
        'examId',
        'answerId',
        'correctAns',
        'chose1',
        'chose2',
        'chose3',
        'chose4'
    ];
}
