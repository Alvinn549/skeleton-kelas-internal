<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'nama',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_kategoris');
    }
}
