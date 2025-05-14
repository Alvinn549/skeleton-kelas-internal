<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\PostKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();

        // dd($posts->toArray());

        return view('dashboard.pages.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();

        return view('dashboard.pages.posts.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate(
            [
                'kategori_id' => ['required', 'array', 'exists:kategoris,id'],
                'judul' => ['required', 'string', 'max:255'],
                'isi' =>  ['required', 'string', 'max:10000'],
                'gambar' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            ],
            [
                'kategori_id.required' => 'Kategori harus dipilih',
                'kategori_id.array' => 'Kategori harus dipilih',
                'kategori_id.exists' => 'Kategori tidak ditemukan',
                'judul.required' => 'Judul harus diisi',
                'judul.string' => 'Judul harus berupa string',
                'judul.max' => 'Judul tidak boleh lebih dari 255 karakter',
                'isi.required' => 'Isi harus diisi',
                'isi.string' => 'Isi harus berupa string',
                'isi.max' => 'Isi tidak boleh lebih dari 10000 karakter',
                'gambar.image' => 'Gambar harus berupa gambar',
                'gambar.mimes' => 'Gambar harus berupa file dengan ekstensi png, jpg, jpeg',
            ]
        );

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['slug'] = Str::slug($request->judul, '-');
        $validatedData['gambar'] = $request->file('gambar')->store('posts', 'public');

        $post = Post::create($validatedData);

        $post->kategoris()->attach($request->kategori_id);

        return redirect()->route('post.index')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post->load('kategoris', 'komentars');

        return view('dashboard.pages.posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $kategoris = Kategori::all();

        return view('dashboard.pages.posts.edit', [
            'post' => $post,
            'kategoris' => $kategoris,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // dd($request->all());

        $validatedData = $request->validate(
            [
                'kategori_id' => ['required', 'array', 'exists:kategoris,id'],
                'judul' => ['required', 'string', 'max:255'],
                'isi' =>  ['required', 'string', 'max:10000'],
                'gambar' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            ],
            [
                'kategori_id.required' => 'Kategori harus dipilih',
                'kategori_id.array' => 'Kategori harus dipilih',
                'kategori_id.exists' => 'Kategori tidak ditemukan',
                'judul.required' => 'Judul harus diisi',
                'judul.string' => 'Judul harus berupa string',
                'judul.max' => 'Judul tidak boleh lebih dari 255 karakter',
                'isi.required' => 'Isi harus diisi',
                'isi.string' => 'Isi harus berupa string',
                'isi.max' => 'Isi tidak boleh lebih dari 10000 karakter',
                'gambar.image' => 'Gambar harus berupa gambar',
                'gambar.mimes' => 'Gambar harus berupa file dengan ekstensi png, jpg, jpeg',
            ]
        );

        $validatedData['slug'] = Str::slug($request->judul, '-');

        if ($request->hasFile('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('posts', 'public');

            if ($post->gambar) {
                Storage::disk('public')->delete($post->gambar);
            }
        }

        $post->kategoris()->sync($request->kategori_id);

        $post->update($validatedData);

        return redirect()->route('post.index')->with('success', 'Post created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->gambar) {
            Storage::disk('public')->delete($post->gambar);
        }

        $post->kategoris()->detach();

        $post->komentars()->delete();

        $post->delete();

        return redirect()->route('post.index')->with('success', 'Post deleted successfully');
    }
}
