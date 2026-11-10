<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;

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

    public function getTranslatedTitleAttribute(): string
    {
        $key = "projects.item.{$this->id}.title";
        return Lang::has($key) ? __($key) : $this->title;
    }

    public function getTranslatedDescriptionAttribute(): string
    {
        $key = "projects.item.{$this->id}.description";
        return Lang::has($key) ? __($key) : $this->description;
    }

    public function getTranslatedStatusAttribute(): string
    {
        $key = "projects.status.{$this->status}";
        return Lang::has($key) ? __($key) : $this->status;
    }
}
