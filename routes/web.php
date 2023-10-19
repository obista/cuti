<?php
use Illuminate\Support\Facades\Route;

//umum
Route::get('/', function () {
    return view('Umum.login.login');
});
Route::get('/register', 'App\Http\Controllers\Umum\RegisterController@index');
Route::post('/register', 'App\Http\Controllers\Umum\RegisterController@store');
Route::get('/forgotpass', 'App\Http\Controllers\Umum\RegisterController@forgotpass');

//  jika belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'App\Http\Controllers\Umum\AuthController@login')->name('login');
    Route::post('/', 'App\Http\Controllers\Umum\AuthController@dologin');
});

// 
Route::group(['middleware' => ['auth', 'checkrole:1,2,3']], function() {
    Route::post('/logout', 'App\Http\Controllers\Umum\AuthController@logout');
    Route::get('/redirect', 'App\Http\Controllers\Umum\RedirectController@cek');
});

// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', 'App\Http\Controllers\Superadmin\SuperadminController@index');
    //cuti
    Route::get('/superadmin/cuti', 'App\Http\Controllers\Superadmin\CutiController@index');
    Route::get('/superadmin/cuti/create', 'App\Http\Controllers\Superadmin\CutiController@create');
    Route::post('/superadmin/cuti/create/post', 'App\Http\Controllers\Superadmin\CutiController@store');
    Route::get('/superadmin/cuti/edit/{id}', 'App\Http\Controllers\Superadmin\CutiController@edit');
    Route::put('/superadmin/cuti/edit/{id}', 'App\Http\Controllers\Superadmin\CutiController@update');
    Route::delete('/superadmin/cuti/hapus/{id}', 'App\Http\Controllers\Superadmin\CutiController@destroy');
    //histori
    Route::get('/superadmin/histori', 'App\Http\Controllers\Superadmin\HistoriController@index');
    Route::delete('/superadmin/histori/hapus/{id}', 'App\Http\Controllers\Superadmin\HistoriController@destroy');
    //pic
    Route::get('/superadmin/pic', 'App\Http\Controllers\Superadmin\PicController@index');
    Route::get('/superadmin/pic/rincian/{id}', 'App\Http\Controllers\Superadmin\PicController@rincian');
    Route::get('/superadmin/pic/create', 'App\Http\Controllers\Superadmin\PicController@create');
    Route::post('/superadmin/pic/create/post', 'App\Http\Controllers\Superadmin\PicController@store');
    Route::get('/superadmin/pic/edit/{id}', 'App\Http\Controllers\Superadmin\PicController@edit');
    Route::put('/superadmin/pic/edit/{id}', 'App\Http\Controllers\Superadmin\PicController@update');
    Route::delete('/superadmin/pic/hapus/{id}', 'App\Http\Controllers\Superadmin\PicController@destroy');
    //karyawan
    Route::get('/superadmin/karyawan', 'App\Http\Controllers\Superadmin\KaryawanController@index');
    Route::get('/superadmin/karyawan/edit/{id}', 'App\Http\Controllers\Superadmin\KaryawanController@edit');
    Route::put('/superadmin/karyawan/edit/{id}', 'App\Http\Controllers\Superadmin\KaryawanController@update');
    Route::delete('/superadmin/karyawan/hapus/{id}', 'App\Http\Controllers\Superadmin\KaryawanController@destroy');
    //user
    Route::get('/superadmin/user', 'App\Http\Controllers\Superadmin\UserController@index');
    Route::get('/superadmin/user/create', 'App\Http\Controllers\Superadmin\UserController@create');
    Route::post('/superadmin/user/create/post', 'App\Http\Controllers\Superadmin\UserController@store');
    Route::get('/superadmin/user/edit/{id}', 'App\Http\Controllers\Superadmin\UserController@edit');
    Route::put('/superadmin/user/edit/{id}', 'App\Http\Controllers\Superadmin\UserController@update');
    Route::delete('/superadmin/user/hapus/{id}', 'App\Http\Controllers\Superadmin\UserController@destroy');

});

// untuk pic
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/pic','App\Http\Controllers\Pic\PicController@index');
    //cuti
    Route::get('/pic/cuti', 'App\Http\Controllers\Pic\CutiController@index');
    Route::get('/pic/cuti/create', 'App\Http\Controllers\Pic\CutiController@create');
    Route::post('/pic/cuti/create/post', 'App\Http\Controllers\Pic\CutiController@store');
    Route::get('/pic/cuti/edit/{id}', 'App\Http\Controllers\Pic\CutiController@edit');
    Route::put('/pic/cuti/edit/{id}', 'App\Http\Controllers\Pic\CutiController@update');
    Route::delete('/pic/cuti/hapus/{id}', 'App\Http\Controllers\Pic\CutiController@destroy');
    //histori
    Route::get('/pic/histori', 'App\Http\Controllers\Pic\HistoriController@index');
    //pengajuan
    Route::get('/pic/pengajuan', 'App\Http\Controllers\Pic\PengajuanController@index');
    Route::get('/pic/pengajuan/edit/{id}', 'App\Http\Controllers\Pic\PengajuanController@edit');
    Route::put('/pic/pengajuan/edit/{id}', 'App\Http\Controllers\Pic\PengajuanController@update');
    Route::delete('/pic/pengajuan/hapus/{id}', 'App\Http\Controllers\Pic\PengajuanController@destroy');
    //profil
    Route::get('/pic/profil', 'App\Http\Controllers\Pic\PicController@profil');
    Route::get('/pic/profil/update/{id}', 'App\Http\Controllers\Pic\PicController@edit');
    Route::put('/pic/profil/update/{id}', 'App\Http\Controllers\Pic\PicController@update');
    
});

// untuk karyawan
Route::group(['middleware' => ['auth', 'checkrole:3']], function() {
    Route::get('/karyawan','App\Http\Controllers\Karyawan\KaryawanController@index');
    Route::get('/baru', 'App\Http\Controllers\Karyawan\KaryawanController@profil' );
    //cuti
    Route::get('/karyawan/cuti', 'App\Http\Controllers\Karyawan\CutiController@index');
    Route::get('/karyawan/cuti/create', 'App\Http\Controllers\Karyawan\CutiController@create');
    Route::post('/karyawan/cuti/create/post', 'App\Http\Controllers\Karyawan\CutiController@store');
    Route::get('/karyawan/cuti/edit/{id}', 'App\Http\Controllers\Karyawan\CutiController@edit');
    Route::put('/karyawan/cuti/edit/{id}', 'App\Http\Controllers\Karyawan\CutiController@update');
    Route::delete('/karyawan/cuti/hapus/{id}', 'App\Http\Controllers\Karyawan\CutiController@destroy');
    //histori
    Route::get('/karyawan/histori', 'App\Http\Controllers\Karyawan\HistoriController@index');
    //profil
    Route::get('/karyawan/profil', 'App\Http\Controllers\Karyawan\KaryawanController@profil');
    Route::get('/karyawan/profil/create', 'App\Http\Controllers\Karyawan\KaryawanController@create');
    Route::post('/karyawan/profil/create/post', 'App\Http\Controllers\Karyawan\KaryawanController@store');
    Route::get('/karyawan/profil/update/{id}', 'App\Http\Controllers\Karyawan\KaryawanController@edit');
    Route::put('/karyawan/profil/update/{id}', 'App\Http\Controllers\Karyawan\KaryawanController@update');
    //pic
    Route::get('/karyawan/pic', 'App\Http\Controllers\Karyawan\PicController@index');

});













