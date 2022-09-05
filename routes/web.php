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
    $soal = \App\Soal::get();
    $data = [
        'soals' => $soal
    ];
    return view('welcome', $data);
});

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/jawaban', 'JawabanController@index')->middleware('auth')->name('jawaban.index');
Route::get('/admin/soal', 'SoalController@index')->middleware('auth')->name('soal.index');
Route::post('/admin/soal', 'SoalController@store')->middleware('auth')->name('soal.store');
Route::post('/admin/soal/delete/{id}', 'SoalController@delete')->middleware('auth')->name('soal.delete');
Route::post('/upload-jawaban', 'JawabanController@upload')->name('jawaban.upload');

