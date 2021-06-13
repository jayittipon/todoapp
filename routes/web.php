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

use App\User;
use Illuminate\Support\Facades\Hash;

Route::get('/', 'HomeController@index');
Route::get('/create', 'HomeController@create');
Route::post('/add', 'HomeController@add');
Route::get('/edit/{id}', 'HomeController@edit');
Route::post('/update/{id}', 'HomeController@edit');
Route::get('/delete/{id}', 'HomeController@delete');

Route::get('/category', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/add', 'CategoryController@add');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::post('/category/update/{id}', 'CategoryController@edit');
Route::get('/category/delete/{id}', 'CategoryController@delete');

Route::get('/login', 'AuthController@login');
Route::post('/doLogin', 'AuthController@doLogin');
Route::get('/register', 'AuthController@register');
Route::post('/doRegister', 'AuthController@doRegister');
Route::get('/logout', 'AuthController@login');

Route::get('/เพิ่มผู้ใช้งานตัวอย่าง', function(){
    $user = new User();
    $user->name = "สมชาย ใจดี";
    $user->email = "somchai@gmail.com";
    $user->password = Hash::make("1234");
    $user->save();
    return "Success! โปรดอย่ารีเฟรชหน้านี้มันจะเพิ่มสามชายอีกคน หรือไม่ก็ฟ้องว่าอีเมล์ซ้ำ";
});
