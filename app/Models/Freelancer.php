<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Freelancer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_pic',
        'porto_url',
        'age',
        'rank',
        'address',
        'join_date',
        'work_duration',
        'job_completed',
        'availability_status',
        'rating'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function application()
    {
        return $this->hasMany(Application::class, 'freelancer_id');
    }
}
