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
            'judul' => 'Belajar Mempercantik Halaman Web dengan CSS',
            'slug' => 'css',
            'deskripsi' => 'Belajar CSS dari Nol. Bikin website kamu jadi lebih cantik dan unik dengan menghiasnya sendiri menggunakan CSS.',
            'thumbnail' => 'https://dwblog-ecdf.kxcdn.com/wp-content/uploads/2019/03/dewaweb-blog-belajar-css-pengertian-fungsi-dan-macamnya.png',
            'video' => 'https://www.youtube.com/embed/OEV8gMkCHXQ'
        ]);
        Course::create([
            'judul' => 'Belajar Membuat Website yang Interaktif menggunakan Javascript',
            'slug' => 'javascript',
            'deskripsi' => 'Ingin website mu lebih interaktif? Yuk belajar Javascript di Academica sekarang.',
            'thumbnail' => 'https://hosteko.com/htk-blog/wp-content/uploads/2019/05/c.png',
            'isPro' => 1,
            'video' => 'https://www.youtube.com/embed/PkZNo7MFNFg'
        ]);
        Course::create([
            'judul' => 'Belajar Machine Learning dengan Python',
            'slug' => 'python',
            'deskripsi' => 'Python termasuk salah satu bahasa pemrograman yang mudah dan populer. Berikut ini panduan lengkap cara belajar python untuk pemula.',
            'thumbnail' => 'https://ichi.pro/assets/images/max/724/1*KzSyurAkoy2xr1RecfChvA.png',
            'video' => 'https://www.youtube.com/embed/_uQrJ0TkZlc'
        ]);

        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Apa itu CSS',
            'slug' => 'apa-itu-css',
            'video' => 'https://www.youtube.com/embed/1Rs2ND1ryYc',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Sintaks',
            'slug' => 'sintaks',
            'video' => 'https://www.youtube.com/embed/1PnVor36_40',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Selektor',
            'slug' => 'selektor',
            'video' => 'https://www.youtube.com/embed/l1mER1bV0N0',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Background',
            'slug' => 'background',
            'video' => 'https://www.youtube.com/embed/l1mER1bV0N0',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Teks',
            'slug' => 'teks',
            'video' => 'https://www.youtube.com/embed/l1mER1bV0N0',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'List',
            'slug' => 'list',
            'video' => 'https://www.youtube.com/embed/l1mER1bV0N0',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Link',
            'slug' => 'link',
            'video' => 'https://www.youtube.com/embed/l1mER1bV0N0',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Table',
            'slug' => 'table',
            'video' => 'https://www.youtube.com/embed/l1mER1bV0N0',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Box Model',
            'slug' => 'box-model',
            'video' => 'https://www.youtube.com/embed/l1mER1bV0N0',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Margin',
            'slug' => 'margin',
            'video' => 'https://www.youtube.com/embed/l1mER1bV0N0',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Border',
            'slug' => 'border',
            'video' => 'https://www.youtube.com/embed/l1mER1bV0N0',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Padding',
            'slug' => 'padding',
            'video' => 'https://www.youtube.com/embed/l1mER1bV0N0',
        ]);
        detailCourse::create([
            'course_id' => '1',
            'chapter' => 'Outline',
            'slug' => 'outline',
            'video' => 'https://www.youtube.com/embed/l1mER1bV0N0',
        ]);

        detailCourse::create([
            'course_id' => '2',
            'chapter' => 'Introduction',
            'slug' => 'introduction',
            'video' => 'https://www.youtube.com/embed/HOVjUKNHAcI'
        ]);
        detailCourse::create([
            'course_id' => '2',
            'chapter' => 'Conditionals',
            'slug' => 'conditionals',
            'video' => 'https://www.youtube.com/embed/IsG4Xd6LlsM'
        ]);
        detailCourse::create([
            'course_id' => '2',
            'chapter' => 'Functions',
            'slug' => 'functions',
            'video' => 'https://www.youtube.com/embed/dld5ZKHYxC0'
        ]);
        detailCourse::create([
            'course_id' => '2',
            'chapter' => 'Scope',
            'slug' => 'scope',
            'video' => 'https://www.youtube.com/embed/hTU1OSbnov8'
        ]);
        detailCourse::create([
            'course_id' => '2',
            'chapter' => 'Arrays',
            'slug' => 'arrays',
            'video' => 'https://www.youtube.com/embed/pDSz3sWnPRw'
        ]);
    }
}
