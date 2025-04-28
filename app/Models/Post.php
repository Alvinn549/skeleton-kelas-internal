<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'judul',
        'slug',
        'isi',
        'gambar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategoris()
    {
        return $this->belongsToMany(Kategori::class, 'post_kategoris');
    }

    public function komentars()
    {
        return $this->hasMany(Komentar::class);
    }
}
