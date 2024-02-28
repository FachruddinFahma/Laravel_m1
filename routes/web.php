<?php

use App\Http\Controllers\home_controller;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::view('URI', 'viewName');

Route::get('/main', function () {
    return view('main');
});

Route::get('/home', [home_controller::class, 'index']);
Route::get('/tampil', [home_controller::class, 'tampil_data']);
Route::post('/simpan', [home_controller::class, 'simpan'])->name('simpan');
Route::get('/user/nama/{nama}/jurusan/{jurusan}', [home_controller::class, 'get_user']);
