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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/Dashboard','AdmminC@dashboard')->middleware('aauth');
Route::get('/admin/user','AdmminC@getUser')->middleware('aauth');
Route::get('/admin/Ctegory','AdmminC@category')->middleware('aauth');
Route::get('admin/selectSub','AdmminC@subcat')->middleware('aauth');
Route::post('/admin/addCat','AdmminC@catAdd')->middleware('aauth');
Route::post('/admin/addSubcat','AdmminC@subcatAdd')->middleware('aauth');
Route::post('/admin/login','AdmminC@login');
Route::get('/admin/logout','AdmminC@logout');
Route::get('/admin',function(){
    return view('Admin.login');
});

Route::get('/test','Testing@test');


Route::get('/production','Pages@showHomePage');

Route::get('/category/{cat_id}','Pages@showCategoryProducts');


Route::get('/finalise_order','Pages@finaliseOrder');

