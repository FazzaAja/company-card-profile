<?php

namespace App\Models;

use App\Models\Product as ModelsProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'image', 'nama', 'title', 'slug', 'posisi', 'deskripsi', 'email', 'phone', 'instagram',
        'facebook', 'tiktok', 'twitter', 'youtube', 'linkedin', 'web', 'pinterest', 'soundcloud'
    ];

    // $array = $fillable;

    public function sluggable(): array
    {

        if (ModelsProduct::where('title')) {

            return [
                'slug' => [
                    'source' => 'title'
                ]
            ];
        } else {
            return [

                'slug' => [
                    'source' => 'nama'
                ]
            ];
        }
    }
}
