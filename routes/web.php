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


Route::get('login',[
    'uses' => 'UserController@getLogin',
    'as' => 'page.login'
]);
Route::get('logout',[
    'uses' => 'UserController@logout',
    'as' => 'page.index'
]);
Route::post('login',[
    'uses' => 'UserController@postLogin',
    'as' => 'page.login'
]);
Route::get('signup',[
    'uses' => 'UserController@getSignup',
    'as' => 'page.signup'
]);
Route::post('signup',[
    'uses' => 'UserController@postSignup',
    'as' => 'page.signup'
]);
