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
