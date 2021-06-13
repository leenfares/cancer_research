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
      Route::get('/all_research', 'front\home_controller@all_research');
      Route::get('/all_partners','front\home_controller@all_partners');
      Route::get('/all_teams', 'front\home_controller@all_teams');
      Route::get('/','front\home_controller@index');
      Route::get('research/{id}','front\home_controller@view_research');
      Route::get('/under_construction', function() {
         return view('front.under_cons');
      });
      Route::get('/about', function() {
         return view('front.about');
       });
   });


/**** test */
Route::get('/home', 'front\HomeController@index')->name('home');

/***********************************************************************************/
/**************************************ADMIN****************************************/
/***********************************************************************************/


/**************************************new****************************************/

Route::group(['prefix' => 'admin','middleware'=>'role:admin'], function () {
Route::get('/panel', function() {
   return view('layouts.admin');
});
Route::get('/users', 'Admin\admin_controller@users');
// Route::get('/roles', 'Admin\admin_controller@roles');
   Route::resources([
      'teams' => 'Admin\TeamController',
      'research' => 'Admin\ResearchController',
      'partner' => 'Admin\PartnerController',
      'roles' => 'Admin\RoleController',
      //'posts' => 'PostController'
      ]);
   Route::post('/teams/update', 'Admin\TeamController@update');
   Route::get('/teams/{id}/delete', 'Admin\TeamController@destroy');
   //////
   Route::post('/research/update', 'Admin\ResearchController@update');
   Route::get('/research/{id}/delete', 'Admin\ResearchController@destroy');
   ///
   Route::post('/partner/update', 'Admin\PartnerController@update');
   Route::get('/partner/{id}/delete', 'Admin\PartnerController@destroy');
   // Route::get('/creatroles', 'roleController@index');
   // Route::get('/remove', 'admin_controller@removeImage');
});





