<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
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

/*
 * Temos que marcar uma reunião pra decidir como vai ficar a estruturar de pasta site e admin
 * [Usuário não autenticado(não consegue ver consulta), usuário authenticado consegue ver consulta e editar a conta]
 */
// Site Routes 
Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/home', [HomeController::class, 'index'])->name('site.home');

// Admin Routes

Auth::routes();

