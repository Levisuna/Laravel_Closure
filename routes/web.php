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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create/murid', function () {
    $murid = \App\Murid::create([
        'name' => "Olaf",
        'kelas' => "XI",
        'jenis_kelamin' => "Laki",
        'jurusan' => "RPL",
        'alamat' => "Rusun"
    ]);
    return $murid;
});

Route::get('/read/murid', function () {
    $murid = \App\Murid::all();
    return $murid;
});
Route::get('/update/murid', function () {
    $murid = \App\Murid::find(1);
    $murid->name = 'Dicko';
    $murid->jurusan = 'OTKP';
    return $murid;
});

Route::get('/delete/murid', function () {
    $murid = \App\Murid::find(1);
    $murid->forceDelete();
    return $murid;
});
