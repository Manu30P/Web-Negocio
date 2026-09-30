@extends('layouts.app')

@section('title', $destination['name'] . ' | Bob & Ina Tour Company')

@section('content')
    <div class="detail-topline section-wrap"><a class="back-link" href="{{ route('destinations.index') }}"><span aria-hidden="true">←</span> Todos los destinos</a><span class="eyebrow">{{ $destination['region'] }} / Cuaderno {{ str_pad((string) $destinationNumber, 2, '0', STR_PAD_LEFT) }}</span></div>

    <section class="destination-hero">
        <img src="{{ asset('images/destinos/' . $destination['folder'] . '/' . $destination['cover']) }}" alt="Paisaje de {{ $destination['name'] }}" fetchpriority="high">
        <div class="destination-hero-shade"></div>
        <div class="destination-title">
            <span class="eyebrow">{{ $destination['region'] }}</span>
            <h1>{{ $destination['name'] }}</h1>
            <p>{{ $destination['tagline'] }}</p>
        </div>
        <span class="hero-caption"><span>NOTAS DE CAMPO DE BOB & INA</span><span>{{ $destination['name'] }}</span></span>
    </section>

    <div class="section-wrap" style="padding-top: 20px;">
        <div class="support-box-green">
            <div class="support-box-header"><span class="icon-support">💚</span> Mensaje de apoyo e instrucciones de lectura</div>
            <span>Estás explorando la ficha de <strong>{{ $destination['name'] }}</strong>. Consulta la galería de imágenes, las notas culturales y utiliza los botones interactivos laterales para ubicar el destino en el mapa o ver avisos de seguridad.</span>
        </div>
    </div>

    <section class="detail-body section-wrap">
        <div class="detail-main">
            <span class="eyebrow">Antes de hacer la maleta</span>
            <h2>Un lugar que no cabe<br>en <em>una sola historia.</em></h2>
            <p class="detail-description">{{ $destination['description'] }}</p>
            <div class="detail-gallery">
                @foreach ($destination['images'] as $image)
                    <figure><img src="{{ asset('images/destinos/' . $destination['folder'] . '/' . $image) }}" alt="{{ $destination['name'] }}: imagen {{ $loop->iteration }}" loading="lazy"><figcaption>{{ $destination['name'] }} · {{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</figcaption></figure>
                @endforeach
            </div>
        </div>
        <aside class="detail-aside">
            <span class="eyebrow">Apuntes de Bob & Ina</span>
            <h3>Lo que nos da curiosidad</h3>
            <ul class="highlight-list">
                @foreach ($destination['highlights'] as $highlight)
                    <li><span aria-hidden="true">↗</span>{{ $highlight }}</li>
                @endforeach
            </ul>
            <div style="margin-top: 15px;">
                <a class="aside-link" href="https://www.google.com/maps/search/?api=1&query={{ rawurlencode($destination['map']) }}" target="_blank" rel="noopener noreferrer">Ver en el mapa <span aria-hidden="true">↗</span></a>
                <span class="support-explanation">💚 Explicación: Abre la ubicación de {{ $destination['name'] }} en Google Maps en una pestaña nueva.</span>
            </div>
            <div class="detail-warning">
                <span class="eyebrow">Viajar con cabeza</span>
                <p>Confirma las recomendaciones oficiales y las condiciones actuales antes de viajar. Esta web no vende excursiones ni ofrece información de seguridad en tiempo real.</p>
                <a href="https://www.exteriores.gob.es/es/ServiciosAlCiudadano/Paginas/Recomendaciones-de-viaje.aspx" target="_blank" rel="noopener noreferrer">Consultar avisos oficiales ↗</a>
                <span class="support-explanation">💚 Explicación: Enlace directo al portal oficial de recomendaciones del Ministerio de Asuntos Exteriores.</span>
            </div>
        </aside>
    </section>

    <nav class="next-destination" aria-label="Siguiente destino">
        <span class="eyebrow">Sigue hojeando</span>
        <a href="{{ route('destinations.show', $nextDestination['slug']) }}">
            <span>{{ $nextDestination['name'] }}</span>
            <span class="next-arrow" aria-hidden="true">↗</span>
        </a>
        <span class="support-explanation">💚 Instrucción de navegación: Haz clic para pasar directamente al siguiente cuaderno de viaje.</span>
    </nav>
@endsection