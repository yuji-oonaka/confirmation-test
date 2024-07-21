<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <div class="header__logo-container">
                    <a class="header__logo" href="/">FashionablyLate</a>
                </div>
                @hasSection('hide-auth-links')
                    <!-- Auth links are hidden -->
                @else
                <nav class="header__nav">
                    @guest
                        <a href="{{ route('login') }}" class="header__nav-item">Login</a>
                        <a href="{{ route('register') }}" class="header__nav-item">Register</a>
                    @else
                        <form method="POST" action="{{ route('logout') }}" class="header__nav-item">
                            @csrf
                            <button type="submit" class="header__nav-button">Logout</button>
                        </form>
                    @endguest
                </nav>
                @endif
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>