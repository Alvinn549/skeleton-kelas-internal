<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostKategori>
 */
class PostKategoriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::inRandomOrder()->first()->id,
            'kategori_id' => Kategori::inRandomOrder()->first()->id,
        ];
    }
}
