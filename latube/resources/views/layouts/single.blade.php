@extends('index')

@section('title')

@endsection

@section('content')
<div class="container mt-5">
<h1>{{ $video->title }}</h1>
<video id="player" playsinline controls>
    <source src="/video/{{ $video->id }}/stream" type="video/mp4" />
</video>
<div class="border border-dark mt-2 ps-2 pe-2 pt-2 rounded">
    <div class="description">
    <b>Описание:</b>
    <p>{{ $video->description }}</p>
    </div>
    <div class="count-views">
    <b>Количество просмотров:</b><p>{{$video->views}} просмотр(ов)</p>
    </div>
    <div class="author">
    <b>Автор:</b> Anton
    </div>
    <div class="like text-end pb-2">
    <a class="btn btn-danger">Нравится</a>
    </div>
</div>
</div>
@endsection
