<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TipoServicoController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PedidoController;




Route::resource('clientes', ClienteController::class)->middleware('auth');
Route::resource('tipo-servicos', TipoServicoController::class);
Route::resource('items', ItemController::class);

Route::resource('pedidos', PedidoController::class);


Route::get('/', function () {
    return view('welcome');
});
Route::get('pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
