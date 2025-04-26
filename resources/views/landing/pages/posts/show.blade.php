@extends('layouts.landing.app')

@section('page_header')
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Detail</h1>
                <p class="lead mb-0">Ini halaman detail</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!">
                    <img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." />
                </a>
                <div class="card-body">
                    <div class="small text-muted">January 1, 2023</div>
                    <div class="small text-muted"><strong>Kategori:</strong>
                        Kategori 1, Kategori 2</div>
                    <h2 class="card-title">Featured Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                        aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
                        vero voluptate voluptatibus possimus, veniam magni quis!</p>

                </div>
            </div>
        </div>

        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Comments widget-->
            <div class="card mb-4">
                <div class="card-header">Comments</div>
                <div class="card-body">
                    <!-- Dummy comments -->
                    <div class="mb-3">
                        <strong>john@example.com</strong>
                        <p class="mb-0">This is a great article! Thanks for sharing.</p>
                        <hr>
                    </div>
                    <div class="mb-3">
                        <strong>jane@example.com</strong>
                        <p class="mb-0">Very informative. Looking forward to more posts like this.</p>
                        <hr>
                    </div>
                    <div class="mb-3">
                        <strong>admin@example.com</strong>
                        <p class="mb-0">Glad you found it useful!</p>
                        <hr>
                    </div>
                </div>
            </div>

            <!-- Comment form widget-->
            <div class="card mb-4">
                <div class="card-header">Leave a Comment</div>
                <div class="card-body">
                    <form action="#!" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="comment" rows="3" placeholder="Write your comment..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
