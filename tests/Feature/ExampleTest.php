<?php

test('la aplicación devuelve una respuesta exitosa (HTTP 200)', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
