<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('welcome'); });

//入力フォームページ
Route::get('/#contact', 'App\Http\Controllers\ContactsController@index')->name('contact.index');

//確認フォームページ
Route::post('/contact/confirm', 'App\Http\Controllers\ContactsController@confirm')->name('contact.confirm');
//送信完了ページ
Route::post('/contact/thanks', 'App\Http\Controllers\ContactsController@send')->name('contact.send');