@extends('index')

@section('title')
{{ $video->title }}
@endsection

@section('content')
<div class="container mt-5">
<h1>{{ $video->title }}</h1>
<video id="player" playsinline controls>
    <source src="/video/{{ $video->id }}/stream" type="video/mp4" />
</video>
<p class="mt-3">
<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   Подробнее
 </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
<div class="border border-dark mt-2 ps-2 pe-2 pt-2 pb-2 rounded">
    <div class="description">
    <b>Описание:</b>
    <p class="overflow-auto" style="height: 100px;">{{ $video->description }}</p>
    </div>
    <div class="count-views">
    <b>Количество просмотров:</b><p>{{$video->views}} просмотр(ов)</p>
    </div>
    <div class="author">
    <b>Автор:</b> {{ $video->author['username'] }}
    </div>
</div>
</div>
</div>
</div>
@endsection
