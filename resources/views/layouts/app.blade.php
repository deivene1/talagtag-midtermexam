<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Laravel App') | Web Dev 3</title>
    <!-- Linking CSS using Laravel asset helper -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Shared Navigation Bar -->
    <header class="site-header">
        <div class="wrap bar">
            <a class="brand" href="/"><span class="dot"></span>Web Dev 3</a>
            <nav class="nav" aria-label="Main">
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a>
                <a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">Services</a>
                <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Dynamic Page Content Injection Point -->
    <main class="wrap container">
        @yield('content')
    </main>

    <!-- Shared Footer -->
    <footer class="site-footer">
        <div class="wrap">
            <p>&copy; 2026 Web Development 3 Class. All rights reserveds.</p>
        </div>
    </footer>
</body>
</html>