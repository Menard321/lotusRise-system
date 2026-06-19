<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'agent_id',
        'business_name',
        'owner_name',
        'phone',
        'category',
        'status',
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
}
