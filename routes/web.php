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
//Route::get('/log','LogController@index')->name('login');

Route::get('/', function () {
    return view('user.search');
});



Route::get('/insert', 'InsertController@showInsert')->name('insert');
Route::Post('/insert', 'InsertController@postData')->name('postinsert');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('userlogout','auth\LoginController@userLogout')->name('user-logout');


Route::get('admin/login','auth\AdminLoginController@showLoginForm')->name('admin-login-showform');
Route::post('admin/login','auth\AdminLoginController@login')->name('admin-login');

Auth::routes();
Route::prefix('admin')->group(function(){

	Route::get('/logout','auth\AdminLoginController@logout')->name('admin-logout');



	Route::get('/adddata','Admin\AddDataController@showForm')->name('admin-add-data');
	Route::post('/adddata','Admin\AddDataController@postData')->name('admin-post-data');

	Route::post('/confirmuser','Admin\ShowUserController@confirmUser')->name('admin-confirm-user');
	Route::post('/canceluser','Admin\ShowUserController@cancelUser')->name('admin-cancel-user');
	

	Route::get('/showupdatedata/{id}','Admin\UpdateDataController@updateData')->name('admin-update-data');
	Route::put('/updatedata','Admin\UpdateDataController@postUpdateData')->name('admin-post-update-data');

	Route::Post('edit','Admin\UpdateDataController@edit')->name('edit');

	Route::post('/deleteData','Admin\DeleteDataController@deleteData')->name('delete-data');



	Route::get('/showdata','Admin\ShowDataController@showDataForm')->name('admin-show-data');
	Route::get('/shownewusers','Admin\ShowUserController@showUsersForm')->name('admin-show-users');

	Route::get('/showcurrentusers','Admin\ShowUserController@showCurUsersForm')->name('admin-show-cur-users');

	Route::get('/','AdminController@index')->name('admin-dashboard');


});



