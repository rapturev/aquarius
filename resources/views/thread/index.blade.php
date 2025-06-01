@extends('layout.layout')

@section('title', '{{ $title }}')

@section('content')
    <h1 class="header__title">
        <a href="{{ route('thread.index') }}" id="title">{{ $threadTitle }}</a>
    </h1>
@endsection
