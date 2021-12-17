<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\detailCourse;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Course::factory(12)->create();

        Course::create([
            'judul' => 'Belajar CSS dasar',
            'slug' => 'css-dasar',
            'deskripsi' => 'Belajar CSS dari Nol. Bikin website kamu jadi lebih cantik dan unik dengan menghiasnya sendiri menggunakan CSS.',
            'thumbnail' => 'https://dwblog-ecdf.kxcdn.com/wp-content/uploads/2019/03/dewaweb-blog-belajar-css-pengertian-fungsi-dan-macamnya.png',
            'video' => 'https://www.youtube.com/embed/OEV8gMkCHXQ'
        ]);
        Course::create([
            'judul' => 'Belajar Javascript dasar',
            'slug' => 'javascript-dasar',
            'deskripsi' => 'Ingin website mu lebih interaktif? Yuk belajar Javascript di Academica sekarang.',
            'thumbnail' => 'https://hosteko.com/htk-blog/wp-content/uploads/2019/05/c.png',
            'isPro' => 1,
            'video' => 'https://www.youtube.com/embed/PkZNo7MFNFg'
        ]);
        Course::create([
            'judul' => 'Belajar Pemrograman Python',
            'slug' => 'pemrograman-python',
            'deskripsi' => 'Python termasuk salah satu bahasa pemrograman yang mudah dan populer. Berikut ini panduan lengkap cara belajar python untuk pemula.',
            'thumbnail' => 'https://ichi.pro/assets/images/max/724/1*KzSyurAkoy2xr1RecfChvA.png',
            'video' => 'https://www.youtube.com/embed/_uQrJ0TkZlc'
        ]);
    }
}
