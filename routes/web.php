<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/listings');
});
Route::resource('listings', ListingController::class)->only(['index', 'show', 'create']);
