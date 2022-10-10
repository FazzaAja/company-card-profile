<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'image', 'nama', 'slug', 'posisi', 'deskripsi', 'email', 'phone', 'instagram',
        'facebook', 'tiktok', 'twitter', 'youtube', 'linkedin', 'web', 'pinterest', 'soundcloud'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
