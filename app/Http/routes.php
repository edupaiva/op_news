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

//Rotas para entidade user(Jornalista)
Route::post('api/register', 'api\UserController@create');
Route::post('api/login', 'api\auth\LoginJwtController@login')->name('login');

Route::group(['middleware' => ['jwt.auth']], function () {

    Route::post('api/me', 'api\UserController@show');
    Route::get('api/logout', 'api\auth\LoginJwtController@logout')->name('logout');
    Route::get('api/refresh', 'api\auth\LoginJwtController@refresh')->name('refresh');

    //Rotas para entidade News
    Route::resource('api/news', 'api\NewsController');
        
    //Rotas para entidade TypeNews
    Route::resource('api/typenews', 'api\TypenewsController');

});