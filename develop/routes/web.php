<?php

use Illuminate\Support\Facades\Route;

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
// 	//return ("Hello World");
// 	return view('fixing');
// 	// return view('index');
// });

Route::get('/admin', function () {
	return view('page.management.news');
});

Route::get('/admin/login', function () {
	return view('page.login');
});

Route::get('/admin/news', function () {
	return view('page.management.news');
});

Route::get('/admin/banner', function () {
	return view('page.management.banner');
});

Route::get('/admin/ads', function () {
	return view('page.management.ads');
});

Route::get('/admin/natural_8', function () {
	return view('page.management.natural_8');
});

// Route::get('/admin/faq', function () {
// 	return view('page.management.faq');
// });

Route::get('/admin/course', function () {
	return view('page.management.course');
});

Route::get('/admin/peter', function () {
	return view('page.management.peter');
});

// Route::get('/admin/logout', function () {
// 	return view('page.management.peter');
// });


// Route::any('{query}',function() { 
// 	return redirect('/admin/login');
// })->where('query', '.*');