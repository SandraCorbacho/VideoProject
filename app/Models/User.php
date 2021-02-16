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
    public function roles()
    {
        return $this
            ->belongsToMany('App\Models\Role')
            ->withTimestamps();
    }
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
    public function authorizeRoles($roles)
{
    if ($this->hasAnyRole($roles)) {
        return true;
    }
    abort(401, 'Non authorized action.');
}
public function hasAnyRole($roles)
{
    if (is_array($roles)) {
        foreach ($roles as $role) {
            if ($this->hasRole($role)) {
                return true;
            }
        }
    } else {
        if ($this->hasRole($roles)) {
            return true;
        }
    }
    return false;
    }
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
}
