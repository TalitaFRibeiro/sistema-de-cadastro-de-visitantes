<?php

use App\Http\Controllers\AcessoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VisitanteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

Route::get('/acesso', [AcessoController::class, "index"])->name('acesso.index');

Route::get('/visitantes', [VisitanteController::class, "index"])->name('visitante.index');
Route::get('/visitantes/cadastrar', [VisitanteController::class, "create"])->name('visitante.create');
Route::post('/visitantes/cadastrar', [VisitanteController::class, "store"])->name('visitante.store');
Route::get('/visitantes/{id}/edit', [VisitanteController::class, "edit"])->name('visitante.edit');
Route::put('/visitantes/{visitante}', [VisitanteController::class, "update"])->name('visitante.update');
Route::get('/visitantes/{id}', [VisitanteController::class, "show"])->name('visitante.show');

Route::get('/relatorio', function () {
    return view('relatorio.index');
})->name('relatorio.index');

Route::get('/trocar-senha', function () {
    return view('login.trocar');
})->name('trocar-senha');




Route::get('/admin/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');



Route::get('/principal', function () {
    return view('layouts.principal');
})->name('principal');

Auth::routes();



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::redirect("/", "/visitantes");
