@section('page_header')
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Home</h1>
                <p class="lead mb-0">Ini Home</p>
            </div>
        </div>
    </header>
@endsection

<div class="row">
    <!-- Blog entries-->
    <div class="col-lg-12">

        <!-- Nested row for non-featured blog posts-->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="/landing/posts/show">
                                    <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                                        alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">January 1, 2023</div>
                                    <h2 class="card-title h4">{{ $post->judul }}</h2>
                                    <p class="card-text">{{ $post->isi }}</p>
                                    <a class="btn btn-primary" href="/landing/posts/show">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Pagination-->
        {{ $posts->links(data: ['scrollTo' => false]) }}
    </div>
</div>
