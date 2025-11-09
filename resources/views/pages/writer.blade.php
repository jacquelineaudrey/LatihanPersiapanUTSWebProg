@extends('layout.master')

@section('content')
    <div class="d-flex flex-column align-items-center justify-content-center flex-fill">
        <h3 class="my-5 text-center">Our Writers</h3>

        {{-- show writers  --}}
        <div class="d-flex flex-wrap justify-content-center gap-5">
            @foreach($writers as $writer)
                <a href="{{ route('writer.article', $writer->id) }}" class="text-decoration-none text-dark">
                    <div class="card writer-card d-flex flex-column align-items-center p-5" style="transition: all 0.3s;">
                        <img src="{{ $writer->image }}" class="rounded-circle mb-3" width="150" height="150" alt="{{ $writer->name }}">
                        <h4 class="text-center">{{ $writer->name }}</h4>
                        <h6 class="text-muted text-center fw-normal mb-0">{{ $writer->job }}</h6>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
