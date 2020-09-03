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
/***********************************************************************************/
/************************************WELCOME****************************************/
/***********************************************************************************/

Route::get('/','home_controller@index');
Route::get('/about', function() {
   return view('about');
 });
Route::get('/test', function() {
   return view('multipl_files');
 });
Route::get('/under_construction', function() {
   return view('under_cons');
});
Route::get('/our_team', 'home_controller@our_team');
Route::get('/all_research', 'home_controller@all_research');
Route::get('research/{id}','home_controller@view_research');

 


/***********************************************************************************/
/************************************WELCOME****************************************/
/***********************************************************************************/


/***********************************************************************************/
/*************************************AUTH******************************************/
/***********************************************************************************/

Auth::routes();

/***********************************************************************************/
/*************************************AUTH******************************************/
/***********************************************************************************/


Route::get('/home', 'HomeController@index')->name('home');


/***********************************************************************************/
/**************************************ADMIN****************************************/
/***********************************************************************************/
Route::get('/dashboard', function() {
   return view('layouts.admin');
})->middleware('role:admin');

///////////////////////////////////////*TEAM*///////////////////////////////////////
Route::get('/dashboard/add_team', 'admin_controller@view_team')->middleware('role:admin');
Route::post('/ad/add_team/', 'admin_controller@create_team' )->middleware('role:admin');
Route::get('/dashboard/edit_team/{id}', 'admin_controller@edit_team')->middleware('role:admin');
Route::post('/ed/edit_team/', 'admin_controller@update_team' )->middleware('role:admin');
Route::get('/dashboard/delete_team/{id}','admin_controller@delete_t')->middleware('role:admin');

//////////////////////////////////////*RESEARCH*////////////////////////////////////
Route::get('/dashboard/add_research', 'admin_controller@view_research')->middleware('role:admin');
Route::post('/ad/add_research/', 'admin_controller@create_research' )->middleware('role:admin');
Route::get('/dashboard/edit_research/{id}', 'admin_controller@edit_research')->middleware('role:admin');
Route::post('/ed/edit_research/', 'admin_controller@update_research' )->middleware('role:admin');
Route::get('/dashboard/delete_research/{id}','admin_controller@delete_research')->middleware('role:admin');


//////////////////////////////////////*USERS*//////////////////////////////////////
Route::get('/dashboard/users', 'admin_controller@users')->middleware('role:admin');
Route::get('/dashboard/roles', 'admin_controller@roles')->middleware('role:admin');
Route::get('/creatroles', 'roleController@index');

/***********************************************************************************/
/**************************************ADMIN****************************************/
/***********************************************************************************/


