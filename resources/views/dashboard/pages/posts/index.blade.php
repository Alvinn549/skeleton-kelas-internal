@extends('layouts.dashboard.app')

@section('css')
    <link href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css" rel="stylesheet">
@endsection

@section('content')
    <h1 class="mt-4">Posts</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Posts</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <div>
                <i class="fas fa-table me-1"></i>
                Data Posts
            </div>
            <div>
                <a href="{{ route('post.create') }}" class="btn btn-success btn-sm">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th width="10">#</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Kategori</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $post->judul }}</td>
                            <td>{{ $post->isi }}</td>
                            <td>
                                {{ $post->kategoris->pluck('nama')->implode(', ') }}
                            </td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{ route('post.show', $post) }}" class="btn btn-primary btn-sm me-1">Detail</a>
                                    <a href="{{ route('post.edit', $post->id) }}"
                                        class="btn btn-warning btn-sm me-1">Edit</a>

                                    <form action="{{ route('post.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">HAPUS</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatablesSimple').DataTable();
        });
    </script>
@endsection
