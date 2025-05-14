<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama' => 'Teknologi',
        ]);
        Kategori::create([
            'nama' => 'Pangan',
        ]);
        Kategori::create([
            'nama' => 'Kesehatan',
        ]);
        Kategori::create([
            'nama' => 'Pendidikan',
        ]);
        Kategori::create([
            'nama' => 'Olahraga',
        ]);
        Kategori::create([
            'nama' => 'Seni',
        ]);
        Kategori::create([
            'nama' => 'Ekonomi',
        ]);
        Kategori::create([
            'nama' => 'Lingkungan',
        ]);
        Kategori::create([
            'nama' => 'Hiburan',
        ]);
    }
}
