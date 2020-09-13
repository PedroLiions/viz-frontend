<?php
//
//use Illuminate\Support\Facades\Route;
//
//
//Route::group([
//
//    'middleware' => ['api']
//
//], function () {
//
//    /*
//    * Authentication routes
//    * */
//    Route::group([
//
//        'prefix' => 'auth',
//        'namespace' => 'Auth'
//
//    ], function () {
//
//        Route::post('login', 'AuthController@login');
//
//        Route::group([
//
//        ], function () {
//
//            Route::post('logout', 'AuthController@logout');
//            Route::post('refresh', 'AuthController@refresh');
//            Route::post('me', 'AuthController@me');
//
//        });
//
//    });
//
//    /*
//     * Dashboards routes
//     * */
//    Route::group([
//
//        'prefix' => 'dashboards',
//        'namespace' => 'Dashboards',
//
//    ], function () {
//
//        Route::get('agents', 'AgentsController@agents');
//        Route::get('best-time', 'AgentsController@bestTime');
//
//    });
//
//
//});
