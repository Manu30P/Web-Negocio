<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DestinationController extends Controller
{
    public function home(): View
    {
        $destinations = $this->destinations();

        return view('home', [
            'destinations' => [
                $destinations['cuba'],
                $destinations['india'],
                $destinations['vietnam'],
            ],
        ]);
    }

    public function index(): View
    {
        return view('destinations.index', [
            'destinations' => $this->destinations(),
        ]);
    }

    public function show(string $slug): View
    {
        $destinations = $this->destinations();
        $destinationIndex = array_search($slug, array_keys($destinations), true);

        abort_unless(array_key_exists($slug, $destinations), 404);

        return view('destinations.show', [
            'destination' => $destinations[$slug],
            'destinationNumber' => $destinationIndex + 1,
            'nextDestination' => array_values($destinations)[($destinationIndex + 1) % count($destinations)],
        ]);
    }

    /** @return array<string, array<string, mixed>> */
    private function destinations(): array
    {
        return [
            'afganistan' => [
                'slug' => 'afganistan',
                'name' => 'Afganistán',
                'folder' => 'afganistan',
                'region' => 'Asia Central',
                'tagline' => 'Montañas inmensas. Planes que requieren muchísima prudencia.',
                'description' => 'Un paisaje de cordilleras, valles y ciudades con una historia profunda. Este destino se presenta como una lectura visual desde casa: la situación de seguridad hace que no ofrezcamos viajes turísticos allí.',
                'cover' => 'afganistan-sin-eeuu-y-los-aliados.jpg',
                'images' => ['afganistan-sin-eeuu-y-los-aliados.jpg', '20260302-ballesteros-operacion-ghazab-lil-haq.jpg', 'FYKYTOD4BNHIRMEUWVHP7N53KM.png', 'mujeres-afganistan-derechos.jpg'],
                'highlights' => ['Cordilleras del Hindu Kush', 'Arquitectura de adobe y bazares históricos', 'Una historia cultural que merece contexto y respeto'],
                'map' => 'Afghanistan',
            ],
            'corea-del-norte' => [
                'slug' => 'corea-del-norte',
                'name' => 'Corea del Norte',
                'folder' => 'correa del norte',
                'region' => 'Asia Oriental',
                'tagline' => 'Un viaje con más reglas que espacio en la maleta.',
                'description' => 'Pyongyang ofrece una arquitectura monumental y una vida cotidiana muy distinta a la de sus vecinos. El acceso turístico está fuertemente restringido y las condiciones pueden cambiar; por eso nuestra visita es exclusivamente virtual.',
                'cover' => 'Montage_of_Pyongyang,_North_Korea.png',
                'images' => ['Montage_of_Pyongyang,_North_Korea.png', 'C.png', 'c2.png', 'caa829f0-60de-11f0-bfe6-55783cb3c7cd.jpg.png', 'corea-del-norte-casas-20250319204716171.jpg'],
                'highlights' => ['El perfil urbano de Pyongyang', 'Estaciones y monumentos de escala monumental', 'Una visita que solo hacemos desde el sofá'],
                'map' => 'Pyongyang, North Korea',
            ],
            'cuba' => [
                'slug' => 'cuba',
                'name' => 'Cuba',
                'folder' => 'cuba',
                'region' => 'Caribe',
                'tagline' => 'Ritmo, color y una bicicleta con agenda propia.',
                'description' => 'Calles llenas de carácter, música que se escapa por las ventanas y paseos que invitan a bajar el ritmo. Cuba tiene muchas capas: venimos a mirar, escuchar y dejar espacio para que el lugar hable por sí mismo.',
                'cover' => 'excursion-en-bicicleta.jpg',
                'images' => ['excursion-en-bicicleta.jpg', '2026-09-23T005200Z-286321362-RC2JONAS182S-RTRMADP-3-CUBA-DAILYLIFE.jpg', '7VFYJUVPBFI3TMFDYPFF6JKFYY.png', 'B2SE7LNRBRDO3JRNSPFBRCWIFA.png'],
                'highlights' => ['Paseos por La Habana Vieja', 'Música en vivo y plazas con sombra', 'Bicicleta opcional; perderse, casi inevitable'],
                'map' => 'Havana, Cuba',
            ],
            'india' => [
                'slug' => 'india',
                'name' => 'India',
                'folder' => 'india',
                'region' => 'Asia Meridional',
                'tagline' => 'Un festín para los sentidos y para el calendario.',
                'description' => 'Entre mercados, templos, trenes y cocinas regionales, cada jornada puede parecer un viaje dentro del viaje. La propuesta es ir con curiosidad, paciencia y espacio de sobra para probar algo nuevo.',
                'cover' => 'india-10005nf4adj__1280x720.jpg',
                'images' => ['india-10005nf4adj__1280x720.jpg', 'comida india.jpg', 'XUKRNFFIWNFTTLXDVO4COW736E.png'],
                'highlights' => ['Arquitectura y mercados históricos', 'Cocinas regionales distintas en cada parada', 'Un itinerario flexible para dejarse sorprender'],
                'map' => 'India',
            ],
            'israel' => [
                'slug' => 'israel',
                'name' => 'Israel',
                'folder' => 'israel',
                'region' => 'Mediterráneo Oriental',
                'tagline' => 'Historia milenaria; actualidad que exige estar informado.',
                'description' => 'Pocos lugares concentran tantos paisajes, tradiciones y sitios de importancia religiosa e histórica. Dada la situación de seguridad cambiante, este recorrido es informativo y no una invitación a viajar.',
                'cover' => 'pared 4.jpg',
                'images' => ['pared 4.jpg', 'pared.png', 'pared2.jpg'],
                'highlights' => ['Lugares de importancia para varias tradiciones', 'Paisajes entre el Mediterráneo y el desierto', 'Consulta avisos oficiales antes de cualquier decisión'],
                'map' => 'Israel',
            ],
            'peru' => [
                'slug' => 'peru',
                'name' => 'Perú',
                'folder' => 'Peru',
                'region' => 'América del Sur',
                'tagline' => 'Altura, historia y una pausa estratégica para el almuerzo.',
                'description' => 'De la costa a los Andes, Perú reúne ciudades vibrantes, patrimonio arqueológico y una cocina admirada en todo el mundo. El secreto del itinerario: dejar margen para una segunda ronda.',
                'cover' => 'images (3).jpg',
                'images' => ['images (3).jpg', '151019143125_muro_peru_lima_pobres_624x460_bbc_nocredit.jpg', 'lima-peru-v0-u8b0664a1ywd1.png', 'ss61dmctyez01.jpg'],
                'highlights' => ['Centro histórico de Lima', 'Paisajes andinos y sitios arqueológicos', 'Ceviche, papas y cero prisa entre platos'],
                'map' => 'Peru',
            ],
            'ucrania' => [
                'slug' => 'ucrania',
                'name' => 'Ucrania',
                'folder' => 'Ucrania',
                'region' => 'Europa Oriental',
                'tagline' => 'Una cultura viva que merece algo más que una postal.',
                'description' => 'Ciudades históricas, arte y una identidad cultural extraordinaria. Por la guerra en curso y sus riesgos, no organizamos visitas: esta página sirve para conocer el país y apoyar una mirada informada.',
                'cover' => 'images (3).jpg',
                'images' => ['images (3).jpg', '71kVpTWzP-L._AC_UF894,1000_QL80_.jpg', 'pexels-max-vakhtbovych-6143369 (1).jpg', 'shutterstock_c6142bf7_1225187263_250327161942_1280x854.png'],
                'highlights' => ['Arquitectura y vida cultural de Kyiv', 'Tradiciones regionales y gastronomía', 'Infórmate sobre la situación antes de planificar'],
                'map' => 'Kyiv, Ukraine',
            ],
            'vietnam' => [
                'slug' => 'vietnam',
                'name' => 'Vietnam',
                'folder' => 'vietnam',
                'region' => 'Sudeste Asiático',
                'tagline' => 'Un paisaje precioso y una lista de platos por descubrir.',
                'description' => 'Desde las calles animadas de Hanói hasta el delta del Mekong, Vietnam recompensa a quien viaja sin correr. El plan oficial de Bob & Ina incluye una caminata, dos cafés y una negociación amistosa con el despertador.',
                'cover' => 'hanoi-1-banner.png',
                'images' => ['hanoi-1-banner.png', '6e-Ho-Chi-Minh-distrito-8-río-Saigon.jpg', 'images (3).jpg', 'images (4).jpg'],
                'highlights' => ['El casco antiguo de Hanói', 'Cafés, mercados y comida callejera', 'Una excursión tranquila por el delta del Mekong'],
                'map' => 'Vietnam',
            ],
        ];
    }
}
