<?php
Route::get('/home', function () {
    return view('home.dashboard');
})->middleware('auth');


//Login
Route::get('/tampil_login', 'UserController@tampilLogin')->name('tampil_login');
Route::post('/tampil_login', 'UserController@login')->name('login');
Route::get('/tampil_register', 'UserController@tampilRegister')->name('tampil_register');
Route::post('/tampil_register', 'UserController@register')->name('register');

//Logout
Route::get('/logout', 'UserController@logout')->name('logout');

//Dashboard
Route::get('/home', 'HomeController@index')->name('dashboard');

//Outlet
Route::get('/tampil_outlet', 'OutletController@tampil')->name('tampil-outlet');
Route::get('/tambah_outlet', 'OutletController@tambah')->name('tambah-outlet');
Route::post('/tambah_outlet', 'OutletController@insert')->name('tambah_outlet');
Route::get('/edit_outlet/{id}', 'OutletController@edit')->name('edit-outlet');
Route::post('/edit_outlet/{id}', 'OutletController@update')->name('edit_outlet');
Route::delete('/delete_outlet/{id}', 'OutletController@delete')->name('hapus-outlet');

//Paket
Route::get('/tampil_paket', 'PaketController@tampil')->name('tampil-paket');
Route::get('/tambah_paket', 'PaketController@tambah')->name('tambah-paket');
Route::post('/tambah_paket', 'PaketController@insert')->name('tambah_paket');
Route::get('/edit_paket/{id}', 'PaketController@edit')->name('edit-paket');
Route::post('/edit_paket/{id}', 'PaketController@update')->name('edit_paket');
Route::delete('/delete_paket/{id}', 'PaketController@delete')->name('hapus-paket');

// Member
Route::get('/tampil_member', 'MemberController@tampil')->name('tampil-member');
Route::get('/tambah_member', 'MemberController@tambah')->name('tambah-member');
Route::post('/tambah_member', 'MemberController@insert')->name('tambah_member');
Route::get('/edit_member/{id}', 'MemberController@edit')->name('edit-member');
Route::post('/edit_member/{id}', 'MemberController@update')->name('edit_member');
Route::delete('/delete_member/{id}', 'MemberController@delete')->name('hapus-member');

//Transaksi
Route::get('/tampil_transaksi', 'TransaksiController@tampil')->name('tampil-transaksi');
Route::get('/tampil_owner', 'TransaksiController@tampilOwner')->name('tampil-owner');
Route::get('/tambah_transaksi', 'TransaksiController@tambah')->name('tambah-transaksi');
Route::post('/tambah_transaksi', 'TransaksiController@insert')->name('tambah_transaksi');
Route::get('/edit_transaksi/{id}', 'TransaksiController@edit')->name('edit-transaksi');
Route::post('/edit_transaksi/{id}', 'TransaksiController@update')->name('edit_transaksi');
Route::get('/tampil_detail/{id}', 'TransaksiController@detail')->name('tampil-detail');
Route::get('/detail_owner/{id}', 'TransaksiController@detailOwner')->name('detail-owner');
Route::get('/transaki/cetakId/{id}', 'TransaksiController@cetakId')->name('cetak_id');
Route::get('/transaksi/cetak_pdf', 'TransaksiController@cetak_pdf');
Route::delete('/delete_transaksi/{id}', 'TransaksiController@delete')->name('hapus-transaksi');