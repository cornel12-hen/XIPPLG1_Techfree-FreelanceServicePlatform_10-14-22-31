<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'freelancer_id',
        'job_id',
        'accepted_at',
        'description',
        'status',
        'is_validated',
    ];

    public function workJob()
    {
        return $this->belongsTo(WorkJob::class, 'job_id');
    }

    public function freelancer()
    {
        return $this->hasMany(Freelancer::class, 'freelancer_id');
    }
}
