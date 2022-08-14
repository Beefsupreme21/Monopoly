<?php

use App\Models\Properties;
use Illuminate\Support\Facades\Route;
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

// Show All
Route::get('/', [PropertiesController::class, 'index']);

// Show Create Form
Route::get('/create', [PropertiesController::class, 'create']);

// Store Data
Route::post('/', [PropertiesController::class, 'store']);

// Show Edit Form

// Update Listing

// Delete Listing
Route::delete('/{property}', [PropertiesController::class, 'destroy']);



Route::get('/{property}', [PropertiesController::class, 'show']);
