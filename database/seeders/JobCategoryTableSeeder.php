<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_categories')->insert([
            'name' => 'Desain Grafis',
            'image' => 'img/still-life-graphic-design-studeio.jpg',
            'description' => 'Gunakan dan tunjukan bakat desainmu untuk menghasilkan keuntungan.',
            'rating' => 5
        ]);

        DB::table('job_categories')->insert([
            'name' => 'Web Development',
            'image' => 'img/computer-program-coding-scre1en.jpg',
            'description' => 'Buat dan kelola website yang diinginkan oleh klienmu.',
            'rating' => 5
        ]);

        DB::table('job_categories')->insert([
            'name' => 'Konten Digital',
            'image' => 'img/discussing-mobile-a1pp.jpg',
            'description' => 'Buat berbagai konten digital menarik untuk kebutuhan promosi klienmu.',
            'rating' => 5
        ]);

        DB::table('job_categories')->insert([
            'name' => 'Fotografi',
            'image' => 'img/hand-holding-photo-cameraw.jpg',
            'description' => 'Salurkan hobi dan bakatmu dalam fotografi, tapi dengan menghasilkan keuntungan!',
            'rating' => 5
        ]);

        DB::table('job_categories')->insert([
            'name' => 'Joki Tugas Sekolah',
            'image' => 'img/books-desktop-near-chalkb1oard.jpg',
            'description' => 'Jangan sia-siakan kemampuan akademismu. Gunakan itu untuk membantu orang lain!',
            'rating' => 5
        ]);
    }
}
