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
//Home
Route::get('/',"Home@home");
Route::get('/kelas',"Kelas@home");
Route::get('/kelas/add',"Kelas@add");
Route::post('/kelas/add',"Kelas@addpost");
Route::get('/kelas/update/{id}',"Kelas@edit");
Route::post('/kelas/update/{id}',"Kelas@edit");
Route::get('/kelas/hapus/{id}',"Kelas@hapus");
Route::get('/siswa',"Siswa@home");
Route::get('/siswa/add',"Siswa@add");
Route::post('/siswa/add',"Siswa@addpost");
Route::get('/siswa/hapus/{id}',"Siswa@hapus");
Route::get('/siswa/update/{id}',"Siswa@edit");
Route::post('/siswa/update/{id}',"Siswa@editpost");
Route::get('/logout',function(Request $req){
  session()->flush();
  return redirect("/");
});
Route::get('/login',"Login@home");
Route::post('/login',"Login@homepost");
