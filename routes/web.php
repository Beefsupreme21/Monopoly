<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChanceCardController;
use App\Http\Controllers\PropertiesController;

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
Route::get('/', function(){
    return view('home');
});


Route::resources([
    '/properties' => PropertiesController::class,
]);

Route::resources([
    '/chance' => ChanceCardController::class,
]);

Route::post('/property-search', function() {
    return redirect('/properties?searchQuery=' . request('searchQuery'));
});