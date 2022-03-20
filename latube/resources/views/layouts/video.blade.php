@extends('index')

@section('title')
Latube
@endsection

@section('content')
<div class="container">
  <div class="row row-cols-4 d-flex justify-content-center">
    @foreach($videos as $video)
<div class="video mt-5 col-auto ">
<div class="card" style="width: 18rem;">
  <img src="{{ $video->img_path }}" class="card-img-top" style="height:180px;">
  <div class="card-body">
    <h5 class="card-title">{{ $video->title }}</h5>

    <p>{{ $video->views }} просмотр(ов)</p>
    <a class="btn btn-primary btn-sm mt-2" href="video/{{ $video->id }}">Смотреть</a>
  </div>
</div>
</div>
  @endforeach
</div>
</div>
</div>
@endsection
