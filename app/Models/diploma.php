<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diploma extends Model
{
    use HasFactory;
    protected $fillable=['name','image'];
    public function course()
    {
        return $this->belongsToMany(course::class,'diolmaccourse_pivot');
    }
}
