<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_pic',
        'age',
        'join_date',
        'job_offer',
        'rating',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
