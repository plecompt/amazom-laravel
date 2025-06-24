<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Amazon')</title>
    @vite(['resources/css/styles.css'])
</head>
<body>
    <header class="navbar">
        <nav class="nav flex">
            <a href="{{ route('products.index') }}">Amazom</a>
            <a href="{{ route('products.index') }}">Accueil</a>
            @auth
                <a href="{{ route('auth.logout') }}">Deconnexion</a>
            @else
                <div style="display: flex; gap: 20px;">
                    <a href="{{ route('auth.login') }}">Connexion</a>                
                    <a href="{{ route('auth.register') }}">Inscription</a>
                </div>
            @endauth
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Amazom</p>
    </footer>
</body>
</html>
