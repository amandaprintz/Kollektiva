<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kollektiva</title>
    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="{{ route('index') }}">Kollektiva</a>
            <a class="hamburger" href="#">
                <svg width="40" height="34" viewBox="0 0 40 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="2" y1="5" x2="38" y2="5" stroke="" stroke-width="4" stroke-linecap="round"/>
                    <line x1="2" y1="17" x2="38" y2="17" stroke="" stroke-width="4" stroke-linecap="round"/>
                    <line x1="2" y1="29" x2="38" y2="29" stroke="" stroke-width="4" stroke-linecap="round"/>
                </svg>
            </a>
            <div class="nav-menu">
                <a class="nav-items" href="#">Om oss</a>
                <a class="nav-items" href="#">Bostadsannonser</a>
                <a class="nav-items" href="#">Intresseanmälningar</a>
                @if (Auth::guest())
                <a class="nav-items" href="{{ route('login') }}">Logga in</a>
                @else
                <a class="nav-items" href="{{ route('logout') }}">Logga ut</a>
                @endif
            </div>
        </nav>
    </header>
