<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f5f2e9">
    <meta name="description" content="Bob & Ina Tour Company: una mirada curiosa, responsable y con humor a destinos extraordinarios.">
    <title>@yield('title', 'Bob & Ina Tour Company')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="site-note site-note-green">
        <span class="badge-support">💚 Mensaje de apoyo</span>
        Turismo de sofá incluido. En destinos con avisos de seguridad, nuestro recorrido es solo virtual. (Haz clic en los enlaces de navegación para explorar los 8 destinos).
    </div>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="{{ route('home') }}" aria-label="Bob & Ina Tour Company, inicio">
                <span class="brand-mark">B<span>&</span>I</span>
                <span class="brand-name">Bob & Ina <small>TOUR COMPANY</small></span>
            </a>
            <nav class="main-nav" aria-label="Navegación principal">
                <a class="{{ request()->routeIs('home') ? 'is-active' : '' }}" href="{{ route('home') }}">Inicio</a>
                <a class="{{ request()->routeIs('destinations.*') ? 'is-active' : '' }}" href="{{ route('destinations.index') }}">Destinos <span>08</span></a>
            </nav>
            <a class="header-cta" href="{{ route('destinations.index') }}">Ver la guía <span aria-hidden="true">↗</span></a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-main">
            <a class="brand footer-brand" href="{{ route('home') }}">
                <span class="brand-mark">B<span>&</span>I</span>
                <span class="brand-name">Bob & Ina <small>TOUR COMPANY</small></span>
            </a>
            <p>Curiosidad por el mundo. Los pies, por ahora, en casa.</p>
            <a class="footer-link" href="https://www.unwto.org/" target="_blank" rel="noopener noreferrer">Organización Mundial del Turismo <span aria-hidden="true">↗</span></a>
        </div>
        <div class="footer-bottom">
            <span>© {{ date('Y') }} Bob & Ina Tour Company</span>
            <span>Proyecto ficticio. No vendemos ni organizamos excursiones.</span>
        </div>
    </footer>
</body>
</html>