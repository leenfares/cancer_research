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

Route::get('/about', function() {
   return view('about');
 });
Route::get('/test', function() {
   return view('test');
 });

Route::get('/our_team', 'home_controller@our_team');
// Route::get('/all_research', 'home_controller@all_research');

 


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



/**** test */
Route::group(
   [
      'prefix' => LaravelLocalization::setLocale(),
      'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
   ], function(){ 
      Route::get('/langs', 'home_controller@langs');
      Route::get('/all_research', 'home_controller@all_research');
      Route::get('/','home_controller@index');
      Route::get('research/{id}','home_controller@view_research');
      Route::get('/test', function() {
         return view('test');
       });
      Route::get('/under_construction', function() {
         return view('under_cons');
      });
   });


/**** test */
Route::get('/home', 'HomeController@index')->name('home');

/***********************************************************************************/
/**************************************ADMIN****************************************/
/***********************************************************************************/


/**************************************new****************************************/

Route::group(['prefix' => 'admin','middleware'=>'role:admin'], function () {
Route::get('/panel', function() {
   return view('layouts.admin');
});
Route::get('/users', 'admin_controller@users');
Route::get('/roles', 'admin_controller@roles');
   Route::resources([
      'teams' => 'Admin\TeamController',
      'research' => 'Admin\ResearchController',
      //'posts' => 'PostController'
      ]);
   Route::post('/teams/update', 'Admin\TeamController@update');
   Route::get('/teams/{id}/delete', 'Admin\TeamController@destroy');
   //////
   Route::post('/research/update', 'Admin\ResearchController@update');
   Route::get('/research/{id}/delete', 'Admin\ResearchController@destroy');
   // Route::get('/creatroles', 'roleController@index');
   // Route::get('/remove', 'admin_controller@removeImage');
});





