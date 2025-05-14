@extends('layouts.dashboard.app')

@section('content')
    <h1 class="mt-4">Post</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/post">Post</a></li>
        <li class="breadcrumb-item active">Detail Post</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <div>
                <i class="fas fa-table me-1"></i>
                Detail Post
            </div>
            <div>
                <a href="/posts" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th width="200">Kategori</th>
                        <td>
                            @foreach ($post->kategoris as $kategori)
                                <span class="badge bg-primary">{{ $kategori->nama }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>{{ $post->judul }}</td>
                    </tr>
                    <tr>
                        <th>Isi</th>
                        <td>{{ $post->isi }}</td>
                    </tr>
                    <tr>
                        <th>Dibuat oleh</th>
                        <td>{{ $post->user->email }}</td>
                    </tr>
                    <tr>
                        <th>Gambar</th>
                        <td>
                            @if ($post->gambar)
                                <img src="{{ asset('storage/' . $post->gambar) }}">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th width="200">Komentar</th>
                        <td>
                            @foreach ($post->komentars as $komentar)
                                <span class="badge bg-primary">{{ $komentar->isi }}</span>

                                @foreach ($komentar->replies as $reply)
                                    <span class="badge bg-secondary">{{ $reply->isi }}</span>
                                @endforeach
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
