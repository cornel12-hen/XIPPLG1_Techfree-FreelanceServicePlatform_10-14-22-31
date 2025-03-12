<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'requirement',
        'category_id',
        'client_id',
        'job_deadline',
        'posted_at',
        'status',
        'price',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function category()
    {
        return $this->belongsTo(JobCategory::class, 'category_id');
    }
}
