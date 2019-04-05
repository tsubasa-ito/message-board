<?php

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

// Route::get('/', function () {
//     return view('welcome');
//     // views/welcome.blade.php が開かれる
// });
//　上５行の省略
Route::get('/', 'MessagesController@index');


// CRUD
// メッセージの個別詳細ページ表示
// Route::get('messages/{id}', 'MessagesController@show');
// メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
// Route::post('messages', 'MessagesController@store');
// メッセージの更新処理（編集画面を表示するためのものではありません）
// Route::put('messages/{id}', 'MessagesController@update');
// メッセージを削除
// Route::delete('messages/{id}', 'MessagesController@destroy');

// index: @showを見せるための補助ページ
// Route::get('messages', 'MessagesController@index')->name('messages.index');
// create: @storeへ渡すための入力が必要　新規作成用のフォームページ
// Route::get('messages/create', 'MessagesController@create')->name('messages.create');
// edit: @updateへ渡すための入力が必要　更新用のフォームページ
// Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');
// 削除アクション(delete)を起こすには、ボタンがあれば大丈夫

//　上17行の省略
Route::resource('messages', 'MessagesController');