<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\TahunAjaranController;

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

Route::get('/', function () {
    return view('welcome');
});



// Auth
Route::middleware(['guest'])->group(function(){
    Route::get('/login' , [LoginController::class,'index'])->name('login');
    Route::post('/auth/login' , [LoginController::class,'store']);
});
// 
Route::middleware(['auth'])->group(function(){
    Route::get('/logout' ,[LoginController::class,'logout']);
    Route::get('/admin',       [AdminController::class, 'index'])->middleware('UserAkses:admin');
    Route::get('/admin/uji',   [AdminController::class, 'kepsek'])->middleware('UserAkses:kepsek');
    Route::get('/admin/coba',  [AdminController::class, 'guru'])->middleware('UserAkses:guru');
});
// 
Route::get('/home',function(){return redirect('dashboard');
});
// Menunuju Ke admin
// Logout
// Menuju Sebuah DAshboard
Route::get('/dashboard',function(){
    return view('dashboard', ['title'=>"dashboard",'halaman'=>"Home"]);
});
// Guru
Route::resource('/guru', GuruController::class);
Route::get('/mapel/search',[MapelController::class,'search']);
Route::resource('/mapel', MapelController::class);
Route::get('/jurusan/search',[JurusanController::class,'search']);
Route::resource('/jurusan', JurusanController::class);
Route::get('/kelas/search', [KelasController::class,'search']);
Route::resource('/kelas' , KelasController::class);
Route::resource('/tahun_ajaran',TahunAjaranController::class);