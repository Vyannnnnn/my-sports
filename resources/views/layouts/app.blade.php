<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Katalog Produk Olahraga')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        @auth
        <div>Role: {{ Auth::user()->role }}</div>
        @endauth
        <nav>
            @guest
            <a href="/register">Register</a>
            <a href="/login">Login</a>
            @else
            <span>Halo, {{ Auth::user()->name }}</span>
            <form action="/logout" method="POST" style="display:inline">
                @csrf
                <button type="submit" style="background:none;border:none;color:#fff;cursor:pointer;">Logout</button>
            </form>
            @endguest
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>