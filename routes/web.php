<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template.master');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/tes', function () {
    return view('spp.sppc.create');
});

Route::controller(SppController::class)->group(function () {
    Route::get('/spp', 'index')->name('spp.sppc.index');
    Route::post('/spp', 'store')->name('spp.sppc.store');
    Route::get('/spp/create', 'create')->name('spp.sppc.create');
    Route::get('/spp/{id}','show')->name('spp.sppc.show');
    Route::put('/spp/{id}','update')->name('spp.sppc.update');
    Route::delete('/spp/{id}','destroy')->name('spp.sppc.destroy');
    Route::get('/spp/{id}/edit','edit')->name('spp.sppc.edit');
    // Route::get('/genre/{genre}','read')->name('genre.read');
});
