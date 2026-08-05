<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'subdomains' => [
            'swapnil.sarwe.in',
            'nikita.sarwe.in',
            'nishwa.sarwe.in',
        ]
    ]);
});
