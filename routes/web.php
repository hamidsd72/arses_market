<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('register/{name?}', function ($name = null) {
    return view('auth.register', compact('name'));
});

// admin route
Route::get('/admins', 'AdminsController@index')->name('admin');
Route::get('/admins/comments', 'AdminsController@commentShow')->name('commentShow');
Route::patch('/admins/value', 'AdminsController@setValue')->name('setValue');

Route::patch('/admins//transactions/transactionComplete', 'AdminsController@transactionComplete')->name('transactionComplete');
Route::patch('/admins//users/userComplete', 'AdminsController@userComplete')->name('userComplete');
Route::patch('/admins//wallets/walletComplete', 'AdminsController@walletComplete')->name('walletComplete');
Route::patch('/admins//comments/commentComplete', 'AdminsController@commentComplete')->name('commentComplete');
// end admin route



Auth::routes();

Route::get('/user/transaction/data', 'HomeController@data');//checking dollar rate

Route::get('/home', 'HomeController@index')->name('home');
Route::post('user/comment/create', 'HomeController@comment')->name('comment');

Route::resource('user', 'UserController', ['except' => ['index','create','store','destroy']] );

Route::resource('authUser', 'AuthUserController', ['only' => ['show','update']] );

Route::resource('comment', 'CommentController', ['only' => ['create']] );

Route::resource('wallet', 'WalletController', ['only' => ['edit','update']] );

Route::resource('transaction', 'TransactionController', ['only' => ['index','create','store']] );
