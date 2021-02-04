<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    private function users()
    {
        return $this->belongsTo(UserDetails::class, 'user_id', 'id')->get();
    }
    private function channel()
    {
        return $this->belongsTo(Channels::class, 'user_id', 'id')->get();
    }
    private function subscriptions()
    {
        return $this->hasMany(Subscriptions::class, 'user_id', 'id')->get();
    }
}
