<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; //panggil controller yang ada dibuat sebelumnya
use App\Http\Controllers\DashboardController;

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
Route::get ('/salam', function(){
    return "Selamat pagi";
}); // ini adalah routing untuk pemanggilan dirinya sendiri
Route::get('/ucapan', function(){
    return view('ucapan'); //ini adalah routing yang mengarahkan ke view yang ada di folder 
    //resources/views
});
Route::get('/nilai', function(){
    return view('nilai');
}); //arahkan return nilai ke file nilai yang ada di view 
Route::get('/daftar_nilai', function(){
    return view('daftar_nilai');
});
//mengarahkan routing ke controller
Route::get('/siswa', [SiswaController::class, 'dataSiswa']);
//mengarahkan ke controller dashboardController
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');