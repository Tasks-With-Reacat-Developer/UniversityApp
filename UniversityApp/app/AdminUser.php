<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminUser extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';

    protected $fillable = [
        'firstName', 'lastName', 'userName', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function articles()
    {
        //one to many relationship
        return $this->hasMany(Article::class);
    }
}
