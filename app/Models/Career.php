<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'title',
        'type',
        'location',
        'description',
        'requirements',
        'status',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
