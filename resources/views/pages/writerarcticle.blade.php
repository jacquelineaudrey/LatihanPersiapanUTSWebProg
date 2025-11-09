@extends('layout.master')

@section('content')
    <div class="mt-5 pt-4">
        <div class="d-flex align-items-center">
            <img src="{{ asset($writer->image) }}" class="rounded-circle me-3" width="70" height="70">
            <div>
                <h5 class="mb-2">{{ $writer->name }}</h5>
                <h6 class="text-muted fw-normal">{{ $writer->job }}</h6>
            </div>
        </div>
        @include('layout.articlecard')
    </div>

@endsection
