<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid d-flex justify-content-between px-5">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('image/logo_edufun.jpg') }}" alt="" style="width: 48px; height: auto;">EduFun
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ms-auto d-flex gap-3">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li>
                                <a class="dropdown-item" href="{{ route('category', ['id' => $category->id]) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('writers') }}" class="nav-link">Writers</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="{{ route('popular') }}" class="nav-link">Popular</a></li>
            </ul>
        </div>
    </div>
</nav>
