<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/" wire:navigate>Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about" wire:navigate>About</a>
                </li>
            </ul>
            <a class="btn btn-outline-primary" href="/login">
                Login
            </a>
            {{-- <a class="btn btn-outline-primary" href="#!">
                Dashboard
            </a> --}}
        </div>
    </div>
</nav>
