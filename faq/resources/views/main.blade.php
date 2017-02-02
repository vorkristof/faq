<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FAQ</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="background-color">
<div class="container main-color">

        <nav role="navigation" class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                @if (Auth::check())
                    <ul class="nav nav-tabs nav-justified">
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a href="{{ url('/') }}" onclick="">Home </a>
                        </li>
                        <li class="{{ Request::is('ask') ? 'active' : '' }}">
                            <a href="{{ url('/ask') }}">Ask </a>
                        </li>
                        <li class="{{ Request::is('questions') ? 'active' : '' }}
                        {{ Request::is('question/*') ? 'active' : '' }}">
                            <a href="{{ url('/questions') }}">Questions </a>
                        </li>
                        <li><a href="{{ url('/logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                @else
                    <ul class="nav nav-tabs nav-justified">
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a href="{{ url('/') }}">Home </a>
                        </li>
                        <li class="{{ Request::is('questions') ? 'active' : '' }}
                        {{ Request::is('question/*') ? 'active' : '' }}">
                            <a href="{{ url('/questions') }}">Questions </a>
                        </li>
                        <li class="{{ Request::is('register') ? 'active' : '' }}">
                            <a href="{{ url('/register') }}">Registration </a>
                        </li>
                        <li class="{{ Request::is('login') ? 'active' : '' }}">
                            <a href="{{ url('/login') }}">Log In</a>
                        </li>
                    </ul>
                @endif
            </div>
        </nav>






    @yield('content')

    <script src="/js/app.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/script.js"></script>
</div>
</body>
</html>
