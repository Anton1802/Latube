@extends('index')

@section('content')
<div class="container">
  <form action="{{ route('login_process') }}" method="post">
    @csrf
    <div class="form-group">
      <label>Имя пользователя:</label>
      <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
      <label>Пароль:</label>
      <input type="text" name="password" class="form-control">
    </div>
    <button class="btn btn-primary mt-2" type="submit">Войти</button>
  </form>
</div>
@endsection
