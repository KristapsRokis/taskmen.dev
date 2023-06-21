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
            <h2>Uzdevumi pa taisno pie tevis!</h2>
        </div>
        @auth
        <ul class="top-right">
            <li>
                    <p>Lietotājs {{auth()->user()->name}}</p>
            </li>
            <li>
                <form class="logout" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="logoutbut">Logout</button>
                </form>
            </li>
        </ul>
        @else
        <ul class="top-right">
            <li>
                <a href="/register" class="register">
                    Reģistrēties</a>
            </li>
            <li>
                <a href="/login" class="login">
                    Pieslēgties</a>
            </li>
        </ul>
        @endauth
    </div>

    @yield('content')

    <x-flash-message>
    </x-flash-message>

</body>
</html>