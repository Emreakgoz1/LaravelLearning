<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmreController;

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
//Bu router
Route::get('/', function () {
    return view('welcome');
});
Route::get('/ilkroutedenemem', function () {
    return 'ilk route denemem';
});
Route::get('/hakkimdatest', function () {
    return 'Merhaba ben Emre Akgöz';
});
Route::get('/iletişimtest', function () {
    return 'merhabalar ben Emre Akgöz';
});
Route::get('/hakkimdaviewtest', function () {
    return view('sayfa.hakkimda');
});
Route::get('/iletişimviewtest', function () {
    return view('sayfa.iletisim');
});
