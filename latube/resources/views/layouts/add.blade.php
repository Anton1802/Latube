@extends('index')

@section('title')
Загрузка видео
@endsection

@section('content')

<div class="container">
  <form action="{{ route('add_process') }}" method="post" enctype="multipart/form-data">
    @csrf
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
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
      <label>Название видео:</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
      <label>Описание видео:</label>
      <textarea class="form-control" name="description" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
      <label>Превью-картинка:</label>
      <input type="file" name="img" class="form-control">
    </div>
    <div class="form-group">
      <label>Видео:</label>
      <input type="file" name="video" class="form-control">
    </div>
    <button type="submit" class="btn btn-success mt-2">Загрузить</button>
  </form>
</div>

@endsection
