<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => 100];
});

require __DIR__.'/auth.php';
