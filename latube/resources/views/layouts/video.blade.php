@extends('index')

@section('content')
<div class="container">
  <div class="row row-cols-4">
    @foreach($videos as $video)
<div class="video mt-2 mb-2 col">
<div class="card" style="width: 18rem;">
  <img src="{{ $video->img_path }}" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">{{ $video->title }}</h5>
    <p class="card-text">{{ $video->description }}</p>
    <a class="btn btn-primary btn-sm" href="video/{{ $video->id }}">Смотреть</a>
  </div>
</div>
</div>
  @endforeach
</div>
</div>
@endsection
