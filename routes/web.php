<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuntetikasiController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');


// });
// Route::get('/login', function () {
//     return view('login');
// });


// Route::get('/admin/{nama}', function ($nama) {
//     return view('admin.index',compact('nama'));
// });

//auntetikasi
Route::get('/',[AuntetikasiController::class, 'login'])->name('login');
Route::post('/login',[AuntetikasiController::class, 'loginStore'])->name('login.store');
Route::post('/logout',[AuntetikasiController::class, 'logout'])->name('logout');
//end auntetikasi



Route::get('/admin',[UserController::class, 'index'])->name('admin.index');

Route::get('/admin/mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/admin/mahasiswa/create',[MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/admin/mahasiswa/create',[MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/admin/mahasiswa/edit/{id}',[MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/admin/mahasiswa/edit/{id}',[MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/admin/mahasiswa/delete/{id}',[MahasiswaController::class, 'delete'])->name('mahasiswa.delete');
Route::get('/admin/mahasiswa/print}',[MahasiswaController::class, 'print'])->name('mahasiswa.print');