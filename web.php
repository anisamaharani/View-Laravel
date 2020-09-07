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

Route::filter('age', function($route, $request, $value)
{
    //
});

Route::get('user', array('before' => 'age:200', function()
{
    return 'Hello World';
}));

Route::get('/dosen', function()
{
    return view('dosen', ['dosen1' => 'Anisa maharani', 'dosen2' => 'asep', 'dosen3' => 'lili', 'dosen4' => 'anzar']);
});

Route::get('/mahasiswa', function()
{
    return view('mahasiswa', ['mahasiswa01' => 'afgan', 'mahasiswa02' => 'sehun', 'mahasiswa03' => 'didi',]);
});

Route::get('/staf', function()
{
    return view('staf', ['staf01' => 'saepul anzri', 'staf02' => 'eko supratman', 'staf03' => 'Rian adnan']);
});