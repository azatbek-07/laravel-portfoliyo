<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'icon',
        'gradient',
        'status',
        'status_color',
        'techs',
        'github',
        'demo',
        'demo_active',
    ];

    protected $casts = [
        'techs' => 'array',
        'demo_active' => 'boolean',
    ];
}
