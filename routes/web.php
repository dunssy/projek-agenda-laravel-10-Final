<?php
use App\Models\User;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Guru\DashboardGuru;
use App\Http\Controllers\Guru\MapelGuruController;
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

// jika User Belum Login
Route::middleware(['guest'])->group(function(){
    //Proses Authentikasi 
    Route::get('/login' , [LoginController::class,'index'])->name('login');
    Route::post('/auth/login' , [LoginController::class,'store']);
});
//Jika User Sesudah Login
Route::middleware(['auth'])->group(function(){
   // Fungsi Log out
    Route::get('/logout' ,[LoginController::class,'logout']);
    // Akses Hanya Admin
    Route::get('/agenda',[AdminController::class,'index'])->middleware('UserAkses:admin');
    // Hakases Admin Dan Kepsek
    Route::get('/settings',function(){return view('admin.index',['title'=>'profile','halaman'=>'setting']);});
    Route::resource('/guru', GuruController::class)->middleware('UserAkses:admin,kepsek');
    Route::resource('/mapel', MapelController::class)->middleware('UserAkses:admin');
    Route::resource('/jurusan', JurusanController::class)->middleware('UserAkses:admin');
    Route::resource('/kelas' , KelasController::class)->middleware('UserAkses:admin');
    Route::resource('/tahun_ajaran',TahunAjaranController::class)->middleware('UserAkses:admin');
    //Hakases Hanya Untuk Guru
    Route::group(['namespace'=>'App\Http\Controllers\Guru'] , function(){
        Route::get('settings/guru',[DashboardGuru::class,'profile']);
        Route::get('agenda/guru' ,[DashboardGuru::class,'index']);
        Route::resource('agenda/mapel', MapelGuruController::class);
    })->middleware('UserAkses:guru');   
});

// Halamana
Route::get('/home',function(){return redirect('/agenda');});
// Admin

// Testing relasi pada laravel 

