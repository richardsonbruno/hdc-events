<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
    <link href="/css/styles.css" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" alt="HDC Events" />
                    </a>

                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Eventos</a></li>
                        <li class="nav-item"><a href="{{ route('create') }}" class="nav-link">Criar Eventos</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Entrar</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Cadastrar</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="container-fluid">
        @if(session('msg'))
            <p class="msg">{{ session('msg') }}</p>
        @endif

        <div class="row">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; HDC Events</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
