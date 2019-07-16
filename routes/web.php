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
// });
//đường dẫn tới trang index dữ liệu.
Route::get('/index','AdminUserController@index');

Route::get('/create','AdminUserController@create');
//đường dẫn tới trang insert dữ liệu.
Route::post('/store','AdminUserController@store');

// đường đẫn tới trang chi tiết
Route::get('/detail/{id}','AdminUserController@show');

//đường dẫn đên trang edit
Route::get('/edit/{id}','AdminUserController@edit');

//đường dẫn đến trang update
Route::PATCH('/update/{id}','AdminUserController@update');

// Xóa sản phẩm 
Route::get('/delete/{id}','AdminUserController@destroy');
