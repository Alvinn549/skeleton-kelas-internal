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
                        <th>Kategori</th>
                        <td>kategori</td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>judul</td>
                    </tr>
                    <tr>
                        <th>Isi</th>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, quae. Laborum reprehenderit quam
                            saepe porro, repellendus, consequatur accusantium autem nesciunt quod accusamus tempora? Non
                            nesciunt distinctio illo assumenda impedit sit!</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
