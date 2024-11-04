<?php

use Illuminate\Support\Facades\Route;

Route::get('/pixel/{uuid}', function ($uuid) {
    // TODO: Implement pixel tracking

    return response()->file(public_path('pixel.png'));
});
