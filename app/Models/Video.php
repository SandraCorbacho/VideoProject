<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['image','path','title','description','active'];

   
    private function comments()
    {
        return $this->hasMany(Comment::class, 'video_id', 'id')->get();
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id')->get();
    }
    private function channel()
    {
        return $this->belongsTo(VideoChannel::class, 'video_id', 'id')->get();
    }
   

}
