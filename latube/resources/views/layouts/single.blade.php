@extends('index')

@section('title')

@endsection

@section('content')
<div class="container">
<h1>{{ $video->title }}</h1>
<video id="player" playsinline controls>
    <source src="/video/{{ $video->id }}/stream" type="video/mp4" />
</video>
</div>
@endsection
