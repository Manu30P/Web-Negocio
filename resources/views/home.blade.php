@extends('layouts.app')

@section('title', 'Bob & Ina Tour Company | Viajes con perspectiva')

@section('content')
    <section class="hero">
        <img class="hero-image" src="{{ asset('images/destinos/cuba/excursion-en-bicicleta.jpg') }}" alt="Paseo en bicicleta por Cuba" fetchpriority="high">
        <div class="hero-shade"></div>
        <div class="hero-content">
            <p class="eyebrow hero-eyebrow"><span></span> Agencia independiente de curiosidad</p>
            <h1>El mundo es<br>grande. <em>Vamos</em><br>a mirarlo bien.</h1>
            <p class="hero-copy">Una colección de destinos fascinantes, historias propias y planes que empiezan con una buena pregunta.</p>
            <a class="button button-light" href="{{ route('destinations.index') }}">Explorar destinos <span aria-hidden="true">↗</span></a>
            
            <div class="support-box-green" style="max-width: 440px; margin-top: 18px;">
                <div class="support-box-header"><span class="icon-support">💚</span> Mensaje de apoyo y guía de inicio</div>
                <span>¡Bienvenido! Haz clic en el botón superior "Explorar destinos" para ver el catálogo completo de países, o desplázate hacia abajo para navegar por nuestras recomendaciones.</span>
            </div>
        </div>
        <div class="hero-caption"><span>01 / 08</span><span>La Habana, Cuba</span></div>
        <span class="hero-side-note">Una buena historia siempre lleva equipaje de mano.</span>
    </section>

    <section class="intro-section section-wrap">
        <div class="intro-label"><span class="eyebrow">Nuestra manera de viajar</span><span class="intro-rule"></span></div>
        <div class="intro-copy">
            <h2>Curiosos por defecto.<br><em>Prudentes por diseño.</em></h2>
            <p>Bob & Ina Tour Company es una agencia ficticia con una curiosidad muy real. Reunimos lugares que despiertan preguntas y los contamos con respeto, buen humor y los pies en la tierra.</p>
            
            <div class="support-box-green">
                <div class="support-box-header"><span class="icon-support">💚</span> Mensaje de apoyo - Filosofía y uso</div>
                <span>Nuestra plataforma ofrece un recorrido educativo y cultural seguro. Te guiamos con transparencia para que disfrutes de la experiencia desde la tranquilidad de tu hogar.</span>
            </div>

            <ul class="principle-list">
                <li><span>01</span> Contexto antes que clichés</li>
                <li><span>02</span> Cultura con respeto</li>
                <li><span>03</span> Seguridad sin letra pequeña</li>
            </ul>
        </div>
    </section>

    <section class="featured-section">
        <div class="section-wrap">
            <div class="section-heading">
                <div><span class="eyebrow">El cuaderno de viaje</span><h2>Una primera <em>ojeada</em></h2></div>
                <a class="text-link" href="{{ route('destinations.index') }}">Los ocho destinos <span aria-hidden="true">↗</span></a>
            </div>

            <div class="support-box-green">
                <div class="support-box-header"><span class="icon-support">💚</span> Instrucciones para explorar los destinos</div>
                <span>Haz clic en la imagen o el nombre de cualquier tarjeta a continuación para desplegar su ficha detallada con imágenes, mapa e historias.</span>
            </div>

            <div class="destination-grid home-grid">
                @foreach ($destinations as $destination)
                    <article class="destination-card">
                        <a class="card-image" href="{{ route('destinations.show', $destination['slug']) }}">
                            <img src="{{ asset('images/destinos/' . $destination['folder'] . '/' . $destination['cover']) }}" alt="{{ $destination['name'] }}" loading="lazy">
                            <span class="card-number">0{{ $loop->iteration }}</span>
                        </a>
                        <div class="card-copy">
                            <span class="eyebrow">{{ $destination['region'] }}</span>
                            <h3><a href="{{ route('destinations.show', $destination['slug']) }}">{{ $destination['name'] }}</a></h3>
                            <p>{{ $destination['tagline'] }}</p>
                            <a class="card-arrow" href="{{ route('destinations.show', $destination['slug']) }}" aria-label="Descubrir {{ $destination['name'] }}">↗</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="safety-band">
        <div class="safety-icon" aria-hidden="true">i</div>
        <div>
            <span class="eyebrow">Una nota importante</span>
            <p>Algunos destinos atraviesan situaciones de riesgo. En esos casos, las fichas son informativas: consulta siempre los avisos oficiales de viaje. Ninguna foto vale una mala decisión.</p>
            <span class="support-explanation">💚 Mensaje de apoyo: Te facilitamos acceso directo a fuentes oficiales para tu protección y tranquilidad.</span>
        </div>
        <div>
            <a class="text-link" href="https://www.exteriores.gob.es/es/ServiciosAlCiudadano/Paginas/Recomendaciones-de-viaje.aspx" target="_blank" rel="noopener noreferrer">Avisos de viaje <span aria-hidden="true">↗</span></a>
            <span class="support-explanation">💚 Explicación: Abre la web oficial en una nueva pestaña.</span>
        </div>
    </section>
@endsection