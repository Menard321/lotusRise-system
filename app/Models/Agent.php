<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'phone_number',
        'email',
        'region',
        'district',
        'occupation',
        'preferred_package',
        'subscription_status',
        'subscription_expires_at',
    ];

    protected $casts = [
        'subscription_expires_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}
