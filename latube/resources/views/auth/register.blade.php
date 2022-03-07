@extends('index')

@section('content')
<div class="container">
  <form action="{{ route('register_process') }}" method="post">
    @csrf
    <div class="form-group">
      <label>Имя пользователя:</label>
      <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
      <label>Почта:</label>
      <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label>Пароль:</label>
      <input type="text" name="password" class="form-control">
    </div>
    <button class="btn btn-success mt-2" type="submit">Регистрация</button>
  </form>
</div>
@endsection
