<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'tags',
        'github_link',
        'demo_link',
        'icon',
    ];

    protected $casts = [
        'tags' => 'array',
    ];
}
