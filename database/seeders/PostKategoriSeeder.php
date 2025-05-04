<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostKategoriSeeder extends Seeder
{
    public function run(): void
    {
        Post::all()->each(function ($post) {
            $kategoriIds = Kategori::inRandomOrder()->take(rand(1, 3))->pluck('id')->toArray();
            $post->kategoris()->attach($kategoriIds);
        });
    }
}
