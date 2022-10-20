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

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba', function () {
    return ("Haloo Guys, Apa Kabar Kalian?") ;
});

Route::get('coba1', function () {
    return ['jojo','rapli','jeje'];
});

Route::get('coba2', function () {
    return [
        'Nama' => 'Joseph',
        'kelas' => 'XII RPL 4',
        'Nis' => '310120118'
    ];
});

Route::get('coba3', function () {
    return [
        'Nama' => 'Joseph satrio',
        'kelas' => 'XII RPL 4',
        'Nis' => '3103120118'
    ];
});
