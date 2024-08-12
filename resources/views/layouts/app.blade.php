<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="nav-container">
            <div class="contenedorimg">
                <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo" />
            </div>
            <nav>
                <a href="/">Home</a>
                <a href="/servicios">Servicios</a>
                <a href="/reservas/create">Reservar Cita</a>
                <a href="/login">Ingresa</a>
                <a href="/clientes/create">Registrate</a>
            </nav>
            <div class="social-and-search">
                <div class="social-media">
                    <a href="https://www.tiktok.com/@yourusername" target="_blank" class="social-icon" rel="noopener noreferrer">
                        <img src="{{ asset('images/tiktok.png') }}" alt="TikTok" />
                    </a>
                    <a href="https://www.facebook.com/yourpage" target="_blank" class="social-icon" rel="noopener noreferrer">
                        <img src="{{ asset('images/facebook.png') }}" alt="Facebook" />
                    </a>
                    <a href="https://www.instagram.com/yourusername" target="_blank" class="social-icon" rel="noopener noreferrer">
                        <img src="{{ asset('images/instagram.png') }}" alt="Instagram" />
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer id="contacto">
        <div class="footer-container">
            <div class="marca-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" />
            </div>
            <p>Copyright © 2023. Todos los derechos de autor reservados. Bogotá - Colombia</p>
        </div>
    </footer>
</body>
</html>
