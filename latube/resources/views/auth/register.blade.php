@extends('index')

@section('title')
Регистрация
@endsection

@section('content')
<div class="container">
  <h1>Регистрация</h1>
  <form action="{{ route('register_process') }}" method="post">
    @csrf
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
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
