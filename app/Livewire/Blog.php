<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination, WithoutUrlPagination;

    #[Layout('layouts.landing.app')]
    public function render()
    {
        // Paginator::useBootstrapFive();

        $posts = Post::simplePaginate(6);

        return view('livewire.blog', compact('posts'));

        // return view('livewire.blog', [
        //     '' => $posts,
        // ]);

        // ->layout('layouts.landing.app');
    }
}
