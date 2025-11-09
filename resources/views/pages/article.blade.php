@extends('layout.master')

@section('content')
    <div class="mt-5">
        <a href="{{ $backUrl }}" class="text-decoration-none text-edu-primary fw-semibold">
            <i class="bi bi-arrow-left"></i>
            Back
        </a>
    </div>

    <div class="w-full my-4">
        <img src="{{ asset( $article->image )}}" alt="{{ $article->title }}" class="w-100 rounded">
    </div>
    <h2>{{ $article->title }}</h2>

    <p><small>{{ $article->category->name }} | {{ $article->created_at->format('d M Y') }}</small></p>
    <hr>
    <p>{!! nl2br(e($article->content)) !!}</p>
    <div class="mt-4 card p-3 bg-light">
        <div class="d-flex align-items-center">
            <img src="{{ asset ($article->writer->image) }}" class="rounded-circle me-3" width="70" height="70">
            <div>
                <h6 class="mb-0">{{ $article->writer->name }}</h6>
                <small>{{ $article->writer->job }}</small>
            </div>
        </div>
    </div>
@endsection
