@extends('layout.master')

@section('heading')
    {{ $category->name }}
@endsection

@section('content')
    @include('layout.articlecard')
@endsection
