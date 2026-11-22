<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'family' => [
            ['name' => 'Swapnil', 'domain' => 'swapnil.sarwe.in', 'emoji' => '🧑‍💻', 'color' => 'peach'],
            ['name' => 'Nikita', 'domain' => 'nikita.sarwe.in', 'emoji' => '🌸', 'color' => 'mint'],
            ['name' => 'Nishwa', 'domain' => 'nishwa.sarwe.in', 'emoji' => '🦄', 'color' => 'lilac'],
        ],
    ]);
});
