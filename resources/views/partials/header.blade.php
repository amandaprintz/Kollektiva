<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kollektiva</title>
    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <header>
        <div class="nav-container">
            <nav>
                <a class="logo" href="{{ route('index') }}">Kollektiva</a>
                <div class="nav">
                    <div class="nav-menu">
                        <div class="link">
                            <a class="nav-items" href="{{ route('ad') }}">Hyr ut</a>
                        </div>
                        <div class="link">
                            <a class="nav-items" href="{{ route('ad-list') }}">Sök bostad</a>
                        </div>
                        <div class="link-last">
                            <a class="nav-items" href="#">Om oss</a>
                        </div>
                        <div class="search">
                            <input name="search" id="search" type="search" placeholder="Skriv in ditt sökord" />
                        </div>
                    </div>
                    @if (Auth::guest())
                    <div class="login-container">
                        <a href="{{ route('login') }}">Logga in här</a>
                    </div>
                    @else
                    <div class="login-container">
                        <a href="{{ route('logout') }}">Logga ut</a>
                    </div>
                    @endif
                </div>
                <a class="menu-toggle" href="#">
                    <svg width="40" height="34" viewBox="0 0 40 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="2" y1="5" x2="38" y2="5" stroke="" stroke-width="4" stroke-linecap="round" />
                        <line x1="2" y1="17" x2="38" y2="17" stroke="" stroke-width="4" stroke-linecap="round" />
                        <line x1="2" y1="29" x2="38" y2="29" stroke="" stroke-width="4" stroke-linecap="round" />
                    </svg>
                </a>
            </nav>
        </div>
        <nav class="menu-hamburger">
            <div class="menu-item">
                <div class="search-mobile">
                    <input name="search" id="search" type="search" placeholder="Skriv in ditt sökord" />
                </div>
                <a href="{{ route('index') }}">Hem</a>
                <a href="{{ route('ad') }}">Hyr ut</a>
                <a href="{{ route('ad-list') }}">Sök bostad</a>
                <a href="{{ route('ad-list') }}">Om oss</a>
                <a href="{{ route('ad-list') }}">Kontakta oss</a>
            </div>
        </nav>

        @if ($success = session('success'))
        <div class="success">
            <p>{{ $success }}</p>
        </div>
        @endif
    </header>
