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
    // return view('welcome');
    // トップページ
    Route::get('/', 'PostsController@index')->name('top');
    // 新規投稿
    Route::resource('posts', 'PostsController', ['only' => ['create', 'store']]);
    // 続きを読むリンク
    Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show']]);
    // コメント機能
    Route::resource('comments', 'CommentsController', ['only' => ['store']]);
    // 投稿を編集する
    Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update']]);
    // 削除する
    Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);
// });
