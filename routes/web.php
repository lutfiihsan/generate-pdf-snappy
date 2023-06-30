<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportPDFController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/report1', function () {
    return view('report1');
});

Route::get('/print', [ExportPDFController::class, 'printPDF']);