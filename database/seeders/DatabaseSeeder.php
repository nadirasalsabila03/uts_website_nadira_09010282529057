<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Data kategori
        DB::table('categories')->insert([
            [
                'name' => 'Teknologi',
                'description' => 'Buku yang membahas teknologi dan ilmu komputer.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Novel',
                'description' => 'Buku berupa cerita fiksi dan novel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pendidikan',
                'description' => 'Buku untuk pembelajaran dan pendidikan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Data buku
        DB::table('books')->insert([
            [
                'category_id' => 1,
                'title' => 'Pemrograman Web dengan Laravel',
                'author' => 'Andi Setiawan',
                'publisher' => 'Informatika',
                'year' => 2024,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'title' => 'Dasar-Dasar Pemrograman',
                'author' => 'Budi Santoso',
                'publisher' => 'Elex Media Komputindo',
                'year' => 2023,
                'stock' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'publisher' => 'Bentang Pustaka',
                'year' => 2005,
                'stock' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'title' => 'Bumi',
                'author' => 'Tere Liye',
                'publisher' => 'Gramedia Pustaka Utama',
                'year' => 2014,
                'stock' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'title' => 'Belajar dan Pembelajaran',
                'author' => 'Slameto',
                'publisher' => 'Rineka Cipta',
                'year' => 2022,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}