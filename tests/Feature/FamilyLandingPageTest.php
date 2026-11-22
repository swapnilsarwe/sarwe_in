<?php

test('the landing page links to every family subdomain', function () {
    $response = $this->get('/');

    $response->assertOk()
        ->assertSee('Sarwe family')
        ->assertSee('https://swapnil.sarwe.in', false)
        ->assertSee('https://nikita.sarwe.in', false)
        ->assertSee('https://nishwa.sarwe.in', false);
});
