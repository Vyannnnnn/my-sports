<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Katalog Produk Olahraga')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="layout">
        <header style="position: sticky; top: 0; z-index: 100; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <nav style="display: flex; justify-content:space-between; align-items: center; padding: 0rem 3rem;">
                {{-- Kiri: Logo --}}
                <di>
                    <a href="/" style="font-size: 1.2rem; font-weight: bold; color: #ffff; text-decoration: none;">
                        SportsMe
                    </a>
                </di>

                {{-- Kanan: Auth links --}}
                <div style="display: flex; gap: 1rem; align-items: center;">
                    @guest
                    <a href="/register">Register</a>
                    <a href="/login">Login</a>
                    @else
                    <span style="font-size: 1rem;font-weight: 600;">Halo, {{ Auth::user()->name }}</span>

                    @if(Auth::user()->role === 'admin')
                    <a href="{{ route('admin.produk.index') }}" style="text-decoration:none; font-size: 1rem;font-weight: 600;">
                        Kelola Produk
                    </a>
                    @endif

                    <form action="/logout" method="POST" style="display:inline">
                        @csrf
                        <button type="submit" style="background:none; border:none; color:#fff; cursor:pointer; text-decoration:none; font-size: 1rem;font-weight: 600;">
                            Logout
                        </button>
                    </form>

                    @endguest
                </div>
            </nav>
        </header>

        <main style="padding-bottom: 5rem;">
            @yield('content')
        </main>

        <footer>
            <div class="footer-container">
                <div class="footer-social">
                    <a href="#" aria-label="Facebook">
                        <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0 0 22 12z" />
                        </svg>
                    </a>

                    <a href="#" aria-label="Twitter">
                        <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.46 6c-.77.35-1.6.59-2.46.7a4.27 4.27 0 0 0 1.88-2.36 8.56 8.56 0 0 1-2.7 1.03 4.25 4.25 0 0 0-7.23 3.88A12.04 12.04 0 0 1 3.15 5.2a4.25 4.25 0 0 0 1.32 5.67 4.22 4.22 0 0 1-1.93-.53v.05a4.26 4.26 0 0 0 3.41 4.17 4.23 4.23 0 0 1-1.92.07 4.26 4.26 0 0 0 3.97 2.95A8.52 8.52 0 0 1 2 19.54 12.04 12.04 0 0 0 8.29 21c7.55 0 11.69-6.26 11.69-11.69 0-.18 0-.35-.01-.53A8.36 8.36 0 0 0 22.46 6z" />
                        </svg>
                    </a>

                    <a href="#" aria-label="LinkedIn">
                        <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.98 3.5A2.5 2.5 0 0 1 7.5 6a2.5 2.5 0 1 1-5 0A2.5 2.5 0 0 1 4.98 3.5zM2 9h6v12H2zM10 9h5.6v1.71h.08a6.15 6.15 0 0 1 5.52-3c5.9 0 7 3.88 7 8.93V21h-6v-6.5c0-1.5 0-3.5-2.13-3.5-2.14 0-2.47 1.67-2.47 3.39V21h-6z" />
                        </svg>
                    </a>

                    <a href="#" aria-label="GitHub">
                        <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .5C5.4.5 0 5.9 0 12.5c0 5.3 3.4 9.8 8.2 11.4.6.1.8-.3.8-.6v-2.1c-3.3.7-4-1.5-4-1.5-.5-1.2-1.2-1.6-1.2-1.6-1-.7.1-.7.1-.7 1.1.1 1.7 1.2 1.7 1.2 1 .1 1.5-.8 2.1-1.2.1-.8.4-1.3.8-1.6-2.6-.3-5.4-1.3-5.4-5.8 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.6.1-3.3 0 0 1-.3 3.3 1.2a11.4 11.4 0 0 1 6 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.7.2 3 .1 3.3.7.8 1.2 1.9 1.2 3.2 0 4.5-2.8 5.5-5.5 5.8.4.4.8 1 .8 2v3c0 .3.2.7.8.6A12 12 0 0 0 24 12.5C24 5.9 18.6.5 12 .5z" />
                        </svg>
                    </a>

                </div>
                <div class="footer-center">
                    <p>© 2025 All rights reserved.</p>
                    <p class="credit">Developed by Isi Nama Kamu</p>
                </div>
                <div class="footer-links">
                    <a href="#">Terms</a>
                    <a href="#">Privacy</a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>