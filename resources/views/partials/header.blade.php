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
                <a class="logo" href="{{ route('index') }}">
                    <img class="desktop-logo" src="{{ asset('images/logo.svg') }}" alt="">
                    <img class="mobile-logo" src="{{ asset('images/logo-mobile.svg') }}" alt="">
                    <!-- <svg width="377" height="80" viewBox="0 0 377 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="kollektiva" d="M128.576 57L114.992 40.008L127.712 24.984H119.312L107.984 39.288V24.984H101.168V57H107.984V47.16L110.48 44.184L120.176 57H128.576ZM128.226 41.016C128.226 50.664 135.282 57.576 144.93 57.576C154.626 57.576 161.682 50.664 161.682 41.016C161.682 31.368 154.626 24.456 144.93 24.456C135.282 24.456 128.226 31.368 128.226 41.016ZM154.674 41.016C154.674 46.968 150.834 51.528 144.93 51.528C139.026 51.528 135.234 46.968 135.234 41.016C135.234 35.016 139.026 30.504 144.93 30.504C150.834 30.504 154.674 35.016 154.674 41.016ZM186.817 57V51H173.281V24.984H166.465V57H186.817ZM211.942 57V51H198.406V24.984H191.59V57H211.942ZM239.371 57V51.096H223.531V43.656H239.035V37.8H223.531V30.84H239.371V24.984H216.715V57H239.371ZM272.107 57L258.523 40.008L271.243 24.984H262.843L251.515 39.288V24.984H244.699V57H251.515V47.16L254.011 44.184L263.707 57H272.107ZM289.471 57V30.984H298.783V24.984H273.247V30.984H282.607V57H289.471ZM309.968 57V24.984H303.152V57H309.968ZM333.844 57L346.18 24.984H338.404L329.572 49.608L320.692 24.984H312.916L325.3 57H333.844ZM376.743 57L364.407 24.984H355.863L343.479 57H350.967L352.983 51.48H367.287L369.303 57H376.743ZM365.415 45.576H354.807L360.135 30.888L365.415 45.576Z" fill="#F9FAFB"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 42L0 70C0 75.5228 4.47715 80 10 80H38V74H10C7.79086 74 6 72.2091 6 70L6 42H0Z" fill="#B3EADA"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42 80L70 80C75.5228 80 80 75.5228 80 70L80 42H74L74 70C74 72.2091 72.2091 74 70 74L42 74V80Z" fill="#FFD0BC"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M38 0L10 0C4.47715 0 0 4.47715 0 10L0 38H6L6 10C6 7.79086 7.79086 6 10 6L38 6V0Z" fill="#FCFDCC"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M80 38V10C80 4.47715 75.5228 0 70 0L42 0V6L70 6C72.2091 6 74 7.79086 74 10V38H80Z" fill="#D9E6FB"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.96 33.0415V59.0005H33.48V48.0932L24.96 33.0415ZM42.9424 51.3638L36.6 42.9805L36.5903 42.992L24.96 27.6634V18.9805H33.48V36.8605L47.64 18.9805H58.14L42.24 37.7605L59.22 59.0005H48.7367L42.9424 51.3638Z" fill="#F9FAFB"/>
                    </svg> -->
                </a>
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
