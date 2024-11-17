<?php
use App\Models\User;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEditController;
use App\Http\Controllers\Guru\AgendaController;
use App\Http\Controllers\Guru\DashboardGuru;
use App\Http\Controllers\Guru\MapelGuruController;
use App\Http\Controllers\Guru\ProfileController;
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
    Route::group([],function(){
        // Fungsi Log out
         Route::get('/logout' ,[LoginController::class,'logout']);
         // Akses Hanya Admin
         Route::get('/dashboard',[AdminController::class,'index']);
         // Hakases Admin Dan Kepsek
         Route::resource('/settings',AdminEditController::class);
         Route::resource('/guru', GuruController::class);
         Route::resource('/mapel', MapelController::class);
         Route::resource('/jurusan', JurusanController::class);
         Route::resource('/kelas' , KelasController::class);
         Route::resource('/tahun_ajaran',TahunAjaranController::class);
         //Hakases Hanya Untuk Guru
    })->middleware('UserAkses:admin');

    Route::group(['namespace'=>'App\Http\Controllers\Guru'] , function(){
        Route::get('dashboard/guru' ,[DashboardGuru::class,'index']);
        Route::resource('setings/guru', ProfileController::class);
        Route::resource('agenda/mapel', MapelGuruController::class);
        Route::resource('agenda/pengajaran', AgendaController::class);
    })->middleware('UserAkses:guru');   
});


// Halamana
Route::get('/home',function(){return redirect('/agenda');});
// Admin

// Testing relasi pada laravel 

