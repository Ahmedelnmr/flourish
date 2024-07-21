<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    public function question()
    {
        return $this->belongsTo(question::class,'question_id');
    }
    use HasFactory;
}
