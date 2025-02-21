<?php
// ClassAdmin
use App\Models\User;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEditController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\TahunAjaranController;
// ClassGuru
use App\Http\Controllers\Guru\AgendaController;
use App\Http\Controllers\Guru\DashboardGuru;
use App\Http\Controllers\Guru\MapelGuruController;
use App\Http\Controllers\Guru\PrintController;
use App\Http\Controllers\Guru\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserAkses;
use Illuminate\Routing\ViewController as RoutingViewController;

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

// kode guest adalah user belum Login
Route::middleware(['guest'])->group(function(){
    //Proses Authentikasi 
    Route::get('/login' , [LoginController::class,'index'])->name('login');
    Route::post('/auth/login' , [LoginController::class,'store']);
});
//kode auth adalah sebagai user Sesudah login 
Route::middleware(['auth', 'UserAkses:admin'])->group(function () {
    // Halaman admin
    // Hakases Admin
         Route::get('/dashboard',[AdminController::class,'index'])->middleware('UserAkses:admin');
         Route::resource('/settings',AdminEditController::class)->middleware('UserAkses:admin');
         Route::resource('/guru', GuruController::class)->middleware('UserAkses:admin');
         //  Delete Guru
         Route::get('delete/guru/{id}',[GuruController::class,'destroy'])->middleware('UserAkses:admin');
        //  End Delete Guru
         Route::resource('/mapel', MapelController::class)->middleware('UserAkses:admin');
        //  Delete Mapel
        Route::get('delete/mapeladmin/{id}',[MapelController::class,'destroy'])->middleware('UserAkses:admin');
        //  End Delete Mapel
         Route::resource('/jurusan', JurusanController::class)->middleware('UserAkses:admin');
        //  Delete Jurusan
        Route::get('delete/jurusan/{id}',[JurusanController::class,'destroy'])->middleware('UserAkses:admin');
        //  End Delete Jurusan
         Route::resource('/kelas' , KelasController::class)->middleware('UserAkses:admin');
        //  Delete Kelas
        Route::get('delete/kelas/{id}',[KelasController::class,'destroy'])->middleware('UserAkses:admin');
        //  End Delete Kelas
         Route::resource('/tahun_ajaran',TahunAjaranController::class)->middleware('UserAkses:admin');
        //  Delete Tahun Ajaran
        Route::get('delete/tahun_ajaran/{id}',[TahunAjaranController::class,'destroy'])->middleware('UserAkses:admin');
        //  End Delete Tahun Ajaran
});
Route::middleware(['auth', 'UserAkses:guru'])->group(function(){
            //Hakases Guru
            // Halaman Guru
            Route::group(['namespace'=>'App\Http\Controllers\Guru'] , function(){
                Route::get('dashboard/guru' ,[DashboardGuru::class,'index']);
                Route::resource('setings/guru', ProfileController::class);
                Route::resource('agenda/mapel', MapelGuruController::class);
                // Delete Mapel Guru
                Route::get('delete/mapel/{id}',[MapelGuruController::class,'destroy']);
                // End Delete Mapel Guru
                Route::resource('agenda/pengajaran' , AgendaController::class);
                // Delete Agenda Pengajaran
                Route::get('delete/agenda/{id}',[AgendaController::class,'destroy']);
                // End Delete Agenda Pengajaran
                // Cetak Laporan
                Route::get('laporan/agenda/{id}',[PrintController::class,'generatePdf']);
                Route::get('/home',function(){return redirect('dashboard/guru');});
           });
});   
 // Fungsi Log out
 Route::get('/logout' ,[LoginController::class,'logout']);

// Testing relasi pada laravel 
