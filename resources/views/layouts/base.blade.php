<!DOCTYPE html>
<html>
    <head>
        <title>arthabasy</title>
        <link type="text/css" href="{{asset('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link id = "css1" rel="stylesheet" href="style.css" type="text/css" media="all" />
        @stack('styles')
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <div id="nav">
                    <ul>
                        <li><a href="#">Обо мне</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Галерея</a></li>
                        @if(!Auth::user())
                        <li><a href="{{ route('login') }}">Войти</a></li>
                        <li><a href="{{ route('register') }}">Регистрация</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
                <div id="banner">
                    <h1>Habasy Art-gallery</h1>
                </div>
            </div>
            <div id="content">
                <div id="left">
                    <p><img src="pict1.jpg" alt="Пора в отпуск"></p>
                </div>
                @yield('content')
                <div id="footer">
                    <div>
                        2020, GeniusErEndDev, Inc. Suspendisse pellentesque augue porttitor eros dignissim, vitae mollis odio porttitor. Nullam sit amet diam sit amet tellus ullamcorper varius a vitae tellus. Suspendisse nec nisl lobortis, vehicula felis sed, ornare nulla. <br />
                        Контакты: <a href="#">genius@imaguru.co</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stack('scripts')
</body>
</html>
