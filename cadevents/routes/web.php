<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/entrar/{id}', [EventController::class, 'entrar']);
Route::get('/contact', [EventController::class, 'contact']);
Route::get('/products', [EventController::class, 'products']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products/{search}', function ($search) {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/products_view/{id}', function ($id) {
    return view('products_view', ['id' => $id]);
});
