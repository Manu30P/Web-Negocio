<?php

test('the home page introduces the company and links to the destination guide', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('Bob & Ina')
        ->assertSee('El mundo es')
        ->assertSee('Curiosos por defecto.')
        ->assertSee('Organización Mundial del Turismo')
        ->assertSee('Ver la guía');
});

test('the destination directory lists all eight countries in the shared layout', function () {
    $this->get('/destinos')
        ->assertOk()
        ->assertSee('Afganistán')
        ->assertSee('Corea del Norte')
        ->assertSee('Cuba')
        ->assertSee('India')
        ->assertSee('Israel')
        ->assertSee('Perú')
        ->assertSee('Ucrania')
        ->assertSee('Vietnam')
        ->assertSee('Pequeña letra')
        ->assertSee('© '.date('Y'));
});

test('a country page shows its local gallery and safety information', function () {
    $this->get('/destinos/corea-del-norte')
        ->assertOk()
        ->assertSee('Corea del Norte')
        ->assertSee('Cuaderno 02')
        ->assertSee('exclusivamente virtual')
        ->assertSee('Ver en el mapa')
        ->assertSee('Consultar avisos oficiales');
});

test('unknown destinations return a not found response', function () {
    $this->get('/destinos/atlantis')->assertNotFound();
});
