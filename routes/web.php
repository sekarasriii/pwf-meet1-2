<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'name' => 'Sekar Asri Maghfirah',
        'nim' => '20230140128'
    ]);
});
