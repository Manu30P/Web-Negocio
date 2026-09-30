@extends('layouts.app')

@section('title', 'Destinos | Bob & Ina Tour Company')

@section('content')
    <section class="page-intro section-wrap">
        <div class="page-intro-top"><span class="eyebrow"><span class="eyebrow-dot"></span> El atlas de Bob & Ina</span><span class="page-count">08 DESTINOS / 01 PLANETA</span></div>
        <h1>Un mapa lleno<br>de <em>historias.</em></h1>
        <p>Ocho lugares muy distintos, cada uno con algo que contar. Empieza por donde quieras; nosotros ya hemos hecho la lista de cosas que no caben en la maleta.</p>
        
        <div class="support-box-green">
            <div class="support-box-header"><span class="icon-support">💚</span> Mensaje de apoyo e instrucciones de navegación</div>
            <span>Explora libremente el catálogo a continuación. Al hacer clic en cualquier fila de la lista se abrirá la ficha completa del destino elegido con todos los detalles culturales, fotografías y su ubicación en el mapa.</span>
        </div>
    </section>

    <section class="directory section-wrap">
        <div class="directory-heading"><span>Destino</span><span>Región</span><span>Nuestra nota</span><span aria-hidden="true">Ver ficha</span></div>
        @foreach ($destinations as $destination)
            <a class="directory-row" href="{{ route('destinations.show', $destination['slug']) }}">
                <span class="directory-place"><span class="directory-index">0{{ $loop->iteration }}</span><span>{{ $destination['name'] }}</span></span>
                <span class="directory-region">{{ $destination['region'] }}</span>
                <span class="directory-tagline">{{ $destination['tagline'] }}</span>
                <span class="directory-arrow" aria-hidden="true">↗</span>
            </a>
        @endforeach
    </section>

    <section class="atlas-note section-wrap">
        <span class="eyebrow">Pequeña letra, gran sentido común</span>
        <div>
            <p>Esta guía es un proyecto ficticio. Los lugares marcados por conflictos o alertas de viaje se presentan solo con fines informativos; no recomendamos ni organizamos viajes a zonas de riesgo.</p>
            <span class="support-explanation">💚 Nota de apoyo: Priorizamos la seguridad y la divulgación responsable en todo momento.</span>
        </div>
    </section>
@endsection