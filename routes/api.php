<?php

use Illuminate\Support\Facades\Route;


Route::group([

    'middleware' => ['api']

], function () {

    /*
    * Authentication routes
    * */
    Route::group([

        'prefix' => 'auth',
        'namespace' => 'Auth'

    ], function () {

        Route::post('login', 'AuthController@login');

        Route::post('logout', 'AuthController@logout');
        Route::post('generate-token', 'AuthController@generateToken');
        Route::post('update-password', 'AuthController@updatePassword');
        Route::post('refresh', 'AuthController@refresh');
        Route::get('me', 'AuthController@me');

    });

    /*
     * Dashboards routes
     * */
    Route::group([

        'prefix' => 'dashboards',
        'namespace' => 'Dashboards',
        'middleware' => 'auth:api'

    ], function () {

        Route::get('agents', 'AgentsController@agents');
        Route::get('best-time', 'AgentsController@bestTime');
        Route::get('comparative', 'AgentsController@comparative');
        Route::get('daily', 'AgentsController@daily');
        Route::get('funnel', 'AgentsController@funnel');
        Route::get('multi-channel', 'AgentsController@multiChannel');
        Route::get('portfolio', 'AgentsController@portfolio');
        Route::get('region', 'AgentsController@region');

    });


});
