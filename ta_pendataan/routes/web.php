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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register_user', [App\Http\Controllers\AdminController::class, 'regist'])->name('register_user');
Route::post('/register_user/', [App\Http\Controllers\AdminController::class, 'prosesregist'])->name('register_user.prosesTambah');  

Route::group(['prefix' => 'admin', 'middleware' => ['level_admin','auth']], function(){
	
	Route::get('/home', [App\Http\Controllers\AdminController::class, 'Home'])->name('admin.home')->middleware('level_admin');	
	
     Route::get('/user', [App\Http\Controllers\AdminController::class, 'userTampil'])->name('users.home')->middleware('level_admin');
     Route::get('/user/tambah', [App\Http\Controllers\AdminController::class, 'tambahUser'])->name('users.tambah')->middleware('level_admin');
     Route::post('/user/', [App\Http\Controllers\AdminController::class, 'prosestambahUser'])->name('users.prosesTambah')->middleware('level_admin');  
     Route::get('/user/{id}', [App\Http\Controllers\AdminController::class, 'editUser'])->name('users.edituser')->middleware('level_admin');     
     Route::get('/user/verifikasi/{id}', [App\Http\Controllers\AdminController::class, 'verifuser'])->name('users.verifikasi')->middleware('level_admin');
     Route::put('/user/verifikasi/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdatestatus'])->name('users.prosesupdatestatus')->middleware('level_admin');     
     Route::delete('/user/{id}', [App\Http\Controllers\AdminController::class, 'hapusUser'])->name('users.hapusUser')->middleware('level_admin');	
     Route::put('/user/{id}', [App\Http\Controllers\AdminController::class, 'prosesUpdateUser'])->name('users.prosesupdateuser')->middleware('level_admin'); 
     Route::get('/user/detail/{id}', [App\Http\Controllers\AdminController::class, 'detailuser'])->name('users.detailuser')->middleware('level_admin');	

     Route::get('/jabatan', [App\Http\Controllers\AdminController::class, 'tampiljabatan'])->name('jabatan.home')->middleware('level_admin');
     Route::get('/jabatan/tambah', [App\Http\Controllers\AdminController::class, 'tambahjabatan'])->name('jabatan.tambah')->middleware('level_admin');
     Route::post('/jabatan/', [App\Http\Controllers\AdminController::class, 'prosestambahjabatan'])->name('jabatan.prosesTambah')->middleware('level_admin');  
     Route::get('/jabatan/{id}', [App\Http\Controllers\AdminController::class, 'editjabatan'])->name('jabatan.edit')->middleware('level_admin');
     Route::delete('/jabatan/{id}', [App\Http\Controllers\AdminController::class, 'hapusjabatan'])->name('jabatan.hapus')->middleware('level_admin');	
     Route::put('/jabatan/{id}', [App\Http\Controllers\AdminController::class, 'prosesUpdatejabatan'])->name('jabatan.prosesupdatejabatan')->middleware('level_admin'); 	

     Route::get('/kelas_mahasiswa', [App\Http\Controllers\AdminController::class, 'tampilkelas_mahasiswa'])->name('kelas_mahasiswa.home')->middleware('level_admin');
     Route::get('/kelas_mahasiswa/tambah', [App\Http\Controllers\AdminController::class, 'tambahkelas_mahasiswa'])->name('kelas_mahasiswa.tambah')->middleware('level_admin');
     Route::post('/kelas_mahasiswa/', [App\Http\Controllers\AdminController::class, 'prosestambahkelas_mahasiswa'])->name('kelas_mahasiswa.prosesTambah')->middleware('level_admin');  
     Route::get('/kelas_mahasiswa/{id}', [App\Http\Controllers\AdminController::class, 'editkelas_mahasiswa'])->name('kelas_mahasiswa.edit')->middleware('level_admin');
     Route::delete('/kelas_mahasiswa/{id}', [App\Http\Controllers\AdminController::class, 'hapuskelas_mahasiswa'])->name('kelas_mahasiswa.hapus')->middleware('level_admin');	
     Route::put('/kelas_mahasiswa/{id}', [App\Http\Controllers\AdminController::class, 'prosesUpdatekelas_mahasiswa'])->name('kelas_mahasiswa.prosesupdatekelas_mahasiswa')->middleware('level_admin');
	 
     Route::get('/mahasiswa', [App\Http\Controllers\AdminController::class, 'tampilmahasiswa'])->name('mahasiswa.home')->middleware('level_admin');
     Route::get('/mahasiswa/tambah', [App\Http\Controllers\AdminController::class, 'tambahmahasiswa'])->name('mahasiswa.tambah')->middleware('level_admin');
     Route::post('/mahasiswa/', [App\Http\Controllers\AdminController::class, 'prosestambahmahasiswa'])->name('mahasiswa.prosesTambah')->middleware('level_admin');  
     Route::get('/mahasiswa/{id}', [App\Http\Controllers\AdminController::class, 'editmahasiswa'])->name('mahasiswa.edit')->middleware('level_admin');
     Route::delete('/mahasiswa/{id}', [App\Http\Controllers\AdminController::class, 'hapusmahasiswa'])->name('mahasiswa.hapus')->middleware('level_admin');	
     Route::put('/mahasiswa/{id}', [App\Http\Controllers\AdminController::class, 'prosesUpdatemahasiswa'])->name('mahasiswa.prosesupdatemahasiswa')->middleware('level_admin');	 

    Route::get('/admincuti', [App\Http\Controllers\AdminController::class, 'tampilpegawai_cuti'])->name('admin_cuti.home')->middleware('level_admin'); 
    Route::get('/admincuti/{id}', [App\Http\Controllers\AdminController::class, 'detailpegawai'])->name('admin_cuti.detail')->middleware('level_admin');  	 
	    Route::get('/cetaksk/{id}', [App\Http\Controllers\AdminController::class, 'cetaksk'])->name('admin.cetaksk')->middleware('level_admin');	
}); 
