<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;
use RakibDevs\Weather\Weather;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WeatherController::class, 'echo']);
