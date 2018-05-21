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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//稽核系統

//主頁(布告欄)
Route::get('/NUTCAuditing', 'NutcAuditingController@index');
//權限設定
// Route::get('permision', 'NutcAuditingController@permision');
//年度內部稽核計畫主頁
// Route::get('/NUTCAuditing/project/index','Internal_Audit_ProjectController@index');
//新增年度內部稽核計畫
// Route::get('/NUTCAuditing/project/create','Internal_Audit_ProjectController@create');
// Route::post('/NUTCAuditing/project/create','Internal_Audit_ProjectController@add');
