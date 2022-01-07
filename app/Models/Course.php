<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory, Sluggable;

    /**
     * Field atau kolom yang boleh di isi secara bersamaan
     * 
     */

    protected $fillable = [
        'judul', 'slug', 'deskripsi', 'thumbnail', 'isPro', 'video'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function detailCourse()
    {
        return $this->hasMany(detailCourse::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
