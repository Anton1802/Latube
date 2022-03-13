@extends('index')

@section('title')
Мой профиль
@endsection

@section('content')
<div class="container">
<div class="userinfo alert alert-primary mt-5">
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

</div>
@endsection
