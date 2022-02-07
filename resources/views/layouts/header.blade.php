<header class="position-relative">
    <div class="overlay position-absolute">
        @isset($page)
        <div class="container h-100 d-flex justify-content-center flex-column">
            <p class="page-name">{{ $page }}</p>
            <div class="directory">
                <a href="#">
                    Home
                </a>
                <span> > </span>
                <span>
                    {{ $page }}
                </span>
            </div>
        </div>
        @endisset
    </div>
</header>
