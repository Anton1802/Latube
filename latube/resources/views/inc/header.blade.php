<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('main') }}">Latube</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('main') }}">Главная</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Меню
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Добавить видео</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav">
        @if(Auth::check())
        <li class="nav-item me-2">
          Привет {{ Auth::user()->username }}!
        </li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="btn btn-primary btn-sm">Выйти</a>
        </li>
        @endif
        <li class="nav-item g-4">
          @if(!Auth::check())
          <a class="btn btn-success btn-sm" href="{{ route('register') }}">Регистрация</a>
          <a class="btn btn-primary btn-sm" href="{{ route('login') }}">Вход</a>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>
