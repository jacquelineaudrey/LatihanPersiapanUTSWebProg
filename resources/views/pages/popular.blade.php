@extends('layout.master')
@section('heading', 'Popular')

@section('content')

    @include('layout.articlecard', ['showViews' => true])

    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end">
            <li class="page-item {{ $articles->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $articles->previousPageUrl() }}" aria-label="Previous">
                    &laquo;
                </a>
            </li>

            @for ($i = 1; $i <= $articles->lastPage(); $i++)
                <li class="page-item {{ $articles->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ $articles->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            <li class="page-item {{ $articles->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $articles->nextPageUrl() }}" aria-label="Next">
                    &raquo;
                </a>
            </li>
        </ul>
    </nav>

@endsection
