<?php

use App\Http\Controllers\Congratulation;
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

Route::get('/happy-birtday', function () {
    return view('happybirtday.index');
});

Route::post('addwish', [Congratulation::class, 'addWish',])->name('add-wish');
Route::get('addwish', [Congratulation::class, 'listWish']);
