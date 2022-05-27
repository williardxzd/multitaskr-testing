<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware('testing')->controller(TestingController::class)->group(function() {
    Route::get('/testing', 'show');
    Route::get('/testing-2', 'another');
});

Route::get('/', function () {
    return view('welcome');
});
