<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'career_id',
        'full_name',
        'email',
        'phone',
        'resume_path',
        'cover_letter',
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
