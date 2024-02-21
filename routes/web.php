<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelassController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/template', function() {
    return view('template.master');
});

Route::get('/main', function() {
    return view('main');
});

Route::get('/tes', function() {
    return view('spp.sppc.create');
});


Route::middleware(['can:isUser'])->group(function() {
    Route::get('/pembayaran', function() {
        return view('spp.pembayaran.index');
    })->name('pembayaran');
});

Route::middleware(['can:isAdmin'])->group(function() {
    Route::controller(SppController::class)->group(function() {
        Route::get('/spp', 'index')->name('spp.sppc.index');
        Route::post('/spp', 'store')->name('spp.sppc.store');
        Route::get('/spp/create', 'create')->name('spp.sppc.create');
        Route::get('/spp/{id}','show')->name('spp.sppc.show');
        Route::put('/spp/{id}','update')->name('spp.sppc.update');
        Route::delete('/spp/{id}','destroy')->name('spp.sppc.destroy');
        Route::get('/spp/{id}/edit','edit')->name('spp.sppc.edit');
    });

    Route::resource('/kelass', KelassController::class);
    Route::resource('/user', UserController::class);
});


Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware(['auth']);

Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login/proses', [AuthController::class, 'authenticate'])->name('auth.proses');
});

