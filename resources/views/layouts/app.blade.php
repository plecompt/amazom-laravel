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
