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
        <div class="nav-container">
            <nav>
                <a class="logo" href="{{ route('index') }}">Kollektiva</a>
                <div class="nav">
                    <div class="nav-menu">
                        <div class="link">
                            <a class="nav-items" href="#">Hyr ut</a>
                        </div>
                        <div class="link">
                            <a class="nav-items" href="#">Sök bostad</a>
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
                    <div class="link-user">
                        <a class="nav-items" href="{{ route('logout') }}">Logga ut</a>
                    </div>
                    @endif
                </div>
                <a class="hamburger" href="#">
                    <svg width="40" height="34" viewBox="0 0 40 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="2" y1="5" x2="38" y2="5" stroke="" stroke-width="4" stroke-linecap="round"/>
                        <line x1="2" y1="17" x2="38" y2="17" stroke="" stroke-width="4" stroke-linecap="round"/>
                        <line x1="2" y1="29" x2="38" y2="29" stroke="" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </a>
            </nav>
        </div>

        @if ($success = session('success'))
       <div class="success">
           <p>{{ $success }}</p>
       </div>
       @endif
    </header>
