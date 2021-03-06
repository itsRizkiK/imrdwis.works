<?php

use App\Http\Controllers\PortfoliosController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);
Route::post('/contact', [SiteController::class, 'contact']);

Route::get('/portfolios/site1', [PortfoliosController::class, 'site1']);
