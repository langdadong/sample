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

Route::get('/', 
	function () { return view('welcome'); }
);
*/
//第一种 写法  简单清晰
Route::get('/', 'StaticPageController@home')->name('hm');
Route::get('/hlp', 'StaticPageController@hlp')->name('hlp');
Route::get('/about','StaticPageController@about')->name('ab');
Route::get('/signup','UserController@create')->name('sgu');
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::resource('/users','UserController');

/*
第二种写法
Route::get('/', 	
	function () 
	{ 
		return view('static_pages/home'); 
	}
)->name('hm');
Route::get('/help', 	
	function () 
	{ 
		return view('static_pages/help'); 
	}
)->name('hp'); //name 里 不能有路径 切记 切记啊
Route::get('/about', 	
	function () 
	{ 
		return view('static_pages/about'); 
	}
)->name('ab');
#)->name('/ab'); 这是 错的，总会报错 ：
Route::get('/signup',function(){ return view('static_pages/signup');})->name('sign');

*/
