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

Route::get('/', function () {
	//return ("Hello World");
	return view('fixing');
	// return view('index');
});

Route::get('/admin', function () {
	return view('page.login');
});

Route::get('/admin/dashboard', function () {
	return view('page.management.news');
});
