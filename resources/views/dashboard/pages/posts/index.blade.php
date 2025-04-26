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
                <a href="/posts/create" class="btn btn-success btn-sm">Tambah</a>
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
                    <tr>
                        <td class="text-center">1</td>
                        <td>Tiger Nixon</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>
                            <a href="/posts/show" class="btn btn-primary btn-sm me-1">Detail</a>
                            <a href="/posts/edit" class="btn btn-warning btn-sm me-1">Edit</a>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Tiger Nixon</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>
                            <a href="/posts/show" class="btn btn-primary btn-sm me-1">Detail</a>
                            <a href="/posts/edit" class="btn btn-warning btn-sm me-1">Edit</a>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
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
