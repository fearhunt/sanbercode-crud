<?php

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

Route::get('/', 'HomeController@home');

Route::get('/pertanyaan/create', 'PertanyaanController@create');    // tampilan halaman form
Route::get('/pertanyaan', 'PertanyaanController@index');    // tampil data
Route::post('/pertanyaan', 'PertanyaanController@store');   // memasukkan data 

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');    // tampilan jawaban
Route::get('/jawaban/{pertanyaan_id}/edit', 'JawabanController@edit');    // ganti jawaban
Route::put('/jawaban/{pertanyaan_id}', 'JawabanController@store');    // masukkan jawaban

Route::delete('/jawaban/{pertanyaan_id}', 'PertanyaanController@delete');    // hapus data



