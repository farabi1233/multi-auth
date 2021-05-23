<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/admin', 'Backend\DashboardController@index')->name('admin.dashboard');
//admin route
