<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Event::listen('illuminate.query', function($query)
{
	// var_dump($query);
});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Route::get('nhom', ['as' => 'nhom.index', 'uses' => 'NhomController@index']);
// Route::get('nhom/{nhom}', ['as' => 'nhom.show', 'uses' => 'NhomController@show']);

// Route::get('nhom/{nhom}/{chungloai}', ['as' => 'nhom.chungloai.show', 'uses' => 'NhomChungLoaiController@show']);
// Route::get('nhom/{nhom}/{chungloai}/{loai}', ['as' => 'nhom.chungloai.loai.show', 'uses' => 'NhomChungLoaiLoaiController@show']);

// Route::get('nhom/{nhom}/{chungloai}/{loai}/create', ['as' => 'nhom.chungloai.loai.thietbi.create', 'uses' => 'NhomChungLoaiLoaiThietBiController@create']);
// Route::post('nhom/{nhom}/{chungloai}/{loai}', ['as' => 'nhom.chungloai.loai.thietbi.store', 'uses' => 'NhomChungLoaiLoaiThietBiController@store']);
// Route::get('nhom/{nhom}/{chungloai}/{loai}/{thietbi}/edit', ['as' => 'nhom.chungloai.loai.thietbi.edit', 'uses' => 'NhomChungLoaiLoaiThietBiController@edit']);
// Route::patch('nhom/{nhom}/{chungloai}/{loai}/{thietbi}', ['as' => 'nhom.chungloai.loai.thietbi.update', 'uses' => 'NhomChungLoaiLoaiThietBiController@update']);
// Route::delete('nhom/{nhom}/{chungloai}/{loai}/{thietbi}', ['as' => 'nhom.chungloai.loai.thietbi.destroy', 'uses' => 'NhomChungLoaiLoaiThietBiController@destroy']);

// Route::get('phuong-tien', ['as' => 'nhom.index', 'uses' => 'NhomController@index']);
Route::get('phuong-tien/{nhom_slug}', ['as' => 'nhom.show', 'uses' => 'NhomController@show']);

Route::get('phuong-tien/{nhom_slug}/{chungloai_slug}', ['as' => 'nhom.chungloai.show', 'uses' => 'NhomChungLoaiController@show']);
Route::get('phuong-tien/{nhom_slug}/{chungloai_slug}/{loai_slug}', ['as' => 'nhom.chungloai.loai.show', 'uses' => 'NhomChungLoaiLoaiController@show']);

Route::get('phuong-tien/{nhom}/{chungloai}/{loai}/create', ['as' => 'nhom.chungloai.loai.thietbi.create', 'uses' => 'NhomChungLoaiLoaiThietBiController@create']);
Route::post('phuong-tien/{nhom}/{chungloai}/{loai}', ['as' => 'nhom.chungloai.loai.thietbi.store', 'uses' => 'NhomChungLoaiLoaiThietBiController@store']);
Route::get('phuong-tien/{nhom}/{chungloai}/{loai}/{thietbi}/edit', ['as' => 'nhom.chungloai.loai.thietbi.edit', 'uses' => 'NhomChungLoaiLoaiThietBiController@edit']);
Route::patch('phuong-tien/{nhom}/{chungloai}/{loai}/{thietbi}', ['as' => 'nhom.chungloai.loai.thietbi.update', 'uses' => 'NhomChungLoaiLoaiThietBiController@update']);
Route::delete('phuong-tien/{nhom}/{chungloai}/{loai}/{thietbi}', ['as' => 'nhom.chungloai.loai.thietbi.destroy', 'uses' => 'NhomChungLoaiLoaiThietBiController@destroy']);

Route::get('bao-cao/create', ['as' => 'report.create', 'uses' => 'ReportController@create']);
Route::post('bao-cao/', ['as' => 'report.store', 'uses' => 'ReportController@store']);
Route::get('bao-cao/', ['as' => 'report.index', 'uses' => 'ReportController@index']);

Route::get('reports/{reportname}', 'FileController@getReport')->where('reportname', '^[^/]+$');