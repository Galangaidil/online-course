<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

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
}
