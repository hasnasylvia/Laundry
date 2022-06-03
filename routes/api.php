<?php

use Illuminate\Http\Request;

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

Route::post('/insert_outlet', 'OutletController@insert');
Route::delete('delete_outlet/{id}', 'OutletController@delete');

Route::post('/insert_member', 'MemberController@insert');
Route::delete('delete_member/{id}', 'MemberController@delete');
Route::put('/update_member/{id}', 'MemberController@update');

Route::post('/insert_paket', 'PaketController@insert');
Route::delete('delete_paket/{id}', 'PaketController@delete');

Route::post('/insert_transaksi', 'TransaksiController@insert');
Route::delete('delete_transaksi/{id}', 'TransaksiController@delete');
Route::put('/update_transaksi/{id}', 'TransaksiController@update');

Route::get('book', 'BookController@book');
Route::get('bookall', 'BookController@bookAuth')->middleware('jwt.verify');
Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');