@extends('layout.master')

@section('content')

    {{-- hero section  --}}
    <div class="d-flex flex-column my-5 justify-content-center align-items-center text-center" style="height:40vh;">
        <h1 class="fs-1 fw-semibold mb-3 mt-3">
            Learn Smart, Grow with <span class="text-edu-primary">EduFun</span>
        </h1>
        <h3 class="fs-6 fw-normal text-secondary mb-4">
            EduFun makes learning engaging and accessible with high-quality articles and tutorials
        </h3>
        <a href="{{ route('about') }}" class="btn btn-dark d-flex align-items-center px-2 justify-content-between gap-3 rounded-pill mt-2">
            <h1 class="fs-6 fw-normal mb-0 mt-0 ms-2">About Us</h1>
            <div class="bg-white text-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 2rem; aspect-ratio: 1 / 1;">
                <i class="bi bi-arrow-right"></i>
            </div>
        </a>
    </div>

    {{-- image  --}}
    <div class="d-flex flex-column mb-5">
        <img class="rounded-2" src="{{ asset('image/hero_section.jpg') }}" alt="">
    </div>

    {{-- show all articles  --}}
    @include('layout.articlecard')
@endsection
