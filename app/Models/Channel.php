<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends BaseController
{
    use HasFactory;
    protected $fillable = ['user_id', 'description', 'title'];
    
    private function video()
    {
        return $this->hasMany(Video::class, 'video_id', 'id')->get();
    }
}
