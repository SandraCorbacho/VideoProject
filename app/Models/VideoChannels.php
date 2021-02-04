<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoChannels extends Model
{
    use HasFactory;
    protected $fillable = ['video_id', 'channel_id'];
    private function subscription()
    {
        return $this->belongsTo(subscriptions::class, 'channel_id', 'id')->get();
    }
}
