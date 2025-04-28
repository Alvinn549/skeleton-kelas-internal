<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = [
        'post_id',
        'email',
        'isi',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
