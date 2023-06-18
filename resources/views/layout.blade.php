<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskMen</title>
    <link rel="stylesheet" href="css/TaskMen.css">
</head>
<body>
    <div class="page-top">
        <a href="index.html" class="logo-place">
            <img class="logo" src="img/logo.png" alt="Logo" class="logo_img"/>
        </a>
        <div class="big-title">
            <h1>TaskMen</h1>
        </div>
        <div class="small-title">
            <h2>Uzdevumi pa viss īsāko ceļu pie tevis!</h2>
        </div>
        <ul class="top-right">
            <li>
                <a href="register.html" class="register">
                    <i class="register_text"></i>Reģistrēties</a>
            </li>
            <li>
                <a href="login.html" class="login"
                    ><i class="login_text"></i>Pieslēgties</a>
            </li>
        </ul>
    </div>

    <form action="">
        <div class="search">
            <input
                type="text"
                name="search"
                class="input"
                placeholder="Meklēt uzdevumus"
            />
            <div class="submit-kaste" id="submit-kaste">
                <button type="submit" class="submit">
                    Meklēt
                </button>
            </div>
        </div>
    </form>

    <main class="main">
        <ul class="legenda-parent">
            <li class="legenda-title">
                Nosaukums
            </li>
            <li class="legenda-desc">
                Apraksts
            </li>
            <li class="legenda-due">
                Termiņš
            </li>
            <li class="legenda-prority">
                Prioritāte
            </li>
            <li class="legenda-status">
                Statuss
            </li>
        </ul>

        @yield('content')
    </main>
</body>
</html>