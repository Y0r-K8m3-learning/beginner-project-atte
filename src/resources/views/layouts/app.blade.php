<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" href="/">
          Atte
        </a>
        <nav>
          <ul class="header-nav">
            @if (Auth::check())
            <li class="header-nav__item">
              <form class="form-logout" action="/logout" method="post">
                @csrf
                <button class="header-nav__button">ログアウト</button>
              </form>
            </li>


            @elseif (Request::is('register'))
            <li>
              <a href="/login"><button type=" button" class="header-nav__button">login</button></a>
            </li>
            @elseif (Request::is('login'))
            <li>
              <a class="" href="/register"> <button type="button" class="header-nav__button">register</button></a>
            </li>

            @endif

          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main>
    @yield('content')
  </main>
  <footer>
    <p>Atte,inc.</p>
  </footer>
</body>

</html>