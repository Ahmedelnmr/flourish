<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certifacte extends Model
{
    protected $fillable=['name','image_path','userid'];
    public function certifacte()
    {
        return $this->belongsTo(course::class, 'course_id');
    }

    use HasFactory;
}
