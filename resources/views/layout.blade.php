<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskMen</title>
    <link rel="stylesheet" href="/css/TaskMen.css">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    <div class="page-top">
        <a href="/" class="logo-place">
            <img class="logo" src="/img/logo.png" alt="Logo">
        </a>
        <div class="big-title">
            <a href="/">
                <h1>TaskMen</h1>
            </a>
        </div>
        <div class="small-title">
            <h2>@lang('messages.title')</h2>
        </div>
        @auth
        <ul class="top-right">
            <li>
                    <p>@lang('messages.user') {{auth()->user()->name}}</p>
            </li>
            <li>
                <form class="logout" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="logoutbut">@lang('messages.logout')</button>
                </form>
            </li>
        </ul>
        @else
        <ul class="top-right">
            <li>
                <a href="/register" class="register">
                    @lang('messages.registration')</a>
            </li>
            <li>
                <a href="/login" class="login">
                    @lang('messages.login')</a>
            </li>
        </ul>
        @endauth
    </div>

    @yield('content')

    <x-flash-message>
    </x-flash-message>
    <div class="lang">
        <a href="{{ url('change-language/lv') }}">LV</a>
        <a href="{{ url('change-language/en') }}">EN</a>
    </div>

</body>
</html>