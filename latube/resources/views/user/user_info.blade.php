@extends('index')

@section('title')
Мой профиль
@endsection

@section('content')
<div class="container">
<div class="userinfo mt-5">
  <div class="row">
  <h4 class="text-center">Информация о вас</h4>
  <div class="avatar col-auto">
    <img
  src="{{ asset('img/user/user_avatar.png') }}"
  style="width: 150px;"
  alt="Avatar"
/>
  </div>
  <div class="col-auto">
    <p><b>Ваше Имя:</b> {{ $user->username }}</p>
    <p><b>Ваш Email:</b>  {{ $user->email }}</p>
    <p><b>Дата регистрации:</b> {{ $user->created_at }}</p>
  </div>
  </div>
</div>
<h5 class="text-center">Мои видео</h5>
<div class="videolist overflow-auto" style="max-height: 300px;">
  <ul class="list-group">
  @foreach($videos as $video)
  <li class="list-group-item">
  <div class="row">
  <p>Название видео: {{ $video->title }}</p>
  <p>Просмотры: {{ $video->views }}</p>
  <p>Дата загрузки: {{ $video->updated_at }}</p>
  <a href="/video/{{ $video->id }}" class="btn btn-primary ">Подробнее</a>
  </div>
  </li>
  @endforeach
</ul>
</div>

</div>
@endsection
