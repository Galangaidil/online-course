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
         'title', 'slug', 'deskripsi', 'thumbnail'
     ];

     public function getRouteKeyName()
    {
        return 'slug';
    }
}
