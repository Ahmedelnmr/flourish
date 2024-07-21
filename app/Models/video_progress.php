<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video_progress extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'video_id', 'progress'];
    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
