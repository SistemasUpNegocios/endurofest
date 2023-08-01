<?php



use Illuminate\Support\Facades\Route;



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



// Rutas de sitio web publicitario

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/menu', [App\Http\Controllers\IndexController::class, 'menu']);

Route::get('/cabañas', [App\Http\Controllers\IndexController::class, 'cabanas']);



Route::post('/admin/addInscripcion', [App\Http\Controllers\InscripcionController::class, 'addInscripcion']);



// Rutas de administrador

Route::get('/admin', [App\Http\Controllers\SessionController::class, 'create'])->name('index');

Route::post('/admin', [App\Http\Controllers\SessionController::class, 'store'])->name('login.store');

Route::get('/admin/logout', [App\Http\Controllers\SessionController::class, 'destroy'])

    ->middleware('auth')

    ->name('logout');



Route::get('/admin/registro', [App\Http\Controllers\RegisterController::class, 'create'])->name('registro');

Route::post('/admin/registro', [App\Http\Controllers\RegisterController::class, 'store'])->name('registro.store');



// Rutas para gestión de inscripciones hechas

Route::get('/admin/inscripciones', [App\Http\Controllers\InscripcionController::class, 'index'])->middleware('auth')->name('inscripciones');

Route::get('/admin/showInscripciones', [App\Http\Controllers\InscripcionController::class, 'getInscripciones'])->middleware('auth');

Route::post('/admin/editInscripcion', [App\Http\Controllers\InscripcionController::class, 'editInscripcion'])->middleware('auth');

Route::post('/admin/deleteInscripcion', [App\Http\Controllers\InscripcionController::class, 'deleteInscripcion'])->middleware('auth');

Route::get('/admin/imprimirResumen', [App\Http\Controllers\InscripcionController::class, 'imprimirResumen']);


