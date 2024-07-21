<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class track extends Model
{
    use HasFactory;
protected $fillable=['name','image'];
public function course()
{
    return $this->belongsToMany(course::class,'traccourse_pivot');
}
    public static function orderBy(string $string, string $string1)
    {
    }
}
