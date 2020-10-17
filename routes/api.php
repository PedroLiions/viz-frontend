<?php

use Illuminate\Support\Facades\Route;


Route::group([

    'middleware' => ['api', 'cors']

], function () {

    Route::group([

        'prefix' => 'users'

    ], function () {

        Route::post('', 'UserController@create');

        Route::get('', 'UserController@all');

        Route::put('{user_id}', 'UserController@updateUser');

        Route::get('pages-and-permissions/{user_id}', 'UserController@pagesAndPermissions');

    });

    Route::group([

        'prefix' => 'permission-control',

    ], function () {

        Route::get('permission', 'PermissionController@permission');

        Route::get('menu', 'PermissionController@menu');

    });

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
     * Chat
     * */
    Route::group([

        'prefix' => 'chat',
        'middleware' => 'auth:api'

    ], function () {

        Route::post('send', 'MessageController@send');

        Route::get('users', 'MessageController@users');

        Route::get('get/{recipient_user_id}', 'MessageController@getMessages');

    });


    /*
     * Dashboards routes
     * */
    Route::group([

        'prefix' => 'dashboards',
        'namespace' => 'Dashboards',
        'middleware' => 'auth:api'

    ], function () {



        Route::group([

            'prefix' => 'agents'

        ], function () {

            Route::get('', 'AgentsController@agents');

            Route::get('grapichs', 'AgentsController@grapichs');

        });

        Route::get('distribution', 'AgentsController@distribution');

        Route::group(['prefix' => 'best-time'], function () {

            Route::get('', 'AgentsController@bestTime');

            Route::get('distribution-by-hour', 'AgentsController@distributionByHour');

        });


        Route::group(['prefix' => 'comparative'], function () {

            Route::get('', 'AgentsController@bestTime');

            Route::get('resume-by-company', 'ComparativeController@resumeByCompany');

        });


        Route::group([

            'prefix' => 'comparative',

        ], function () {

            Route::get('', 'AgentsController@comparative');

            Route::get('comparative-by-company', 'ComparativeController@comparativeByCompany');

        });


        Route::group([

            'prefix' => 'daily'

        ], function () {

            Route::get('', 'AgentsController@daily');

            Route::get('summary', 'DailyController@summary');

            Route::get('consolidate-finish-by-operator', 'DailyController@consolidateFinishByOperator');

            Route::get('percent-consolidate-finish-by-operator', 'DailyController@percentConsolidateFinishByOperator');

            Route::get('consolidate-finish-by-dialer', 'DailyController@consolidateFinishByDialer');

            Route::get('percent-consolidate-finish-by-dialer', 'DailyController@percentConsolidateFinishByDialer');

        });


        Route::group([

            'prefix' => 'funnel'

        ], function () {

            Route::get('', 'AgentsController@funnel');

            Route::get('resume-financial-by-portfolio', 'FunnelController@resumeFinancialByPortfolio');

            Route::get('panel-comparative-company', 'FunnelController@panelComparativeCompany');

        });

        Route::get('multi-channel', 'AgentsController@multiChannel');

        Route::group([

            'prefix' => 'portfolio'

        ], function() {

            Route::get('', 'AgentsController@portfolio');

            Route::get('resume-financial-portfolio', 'PortfolioController@resumeFinancialPortfolio');

            Route::get('resume-by-contracts', 'PortfolioController@resumeByContracts');

        });

        Route::group([

            'prefix' => 'region'

        ], function() {

            Route::get('', 'AgentsController@region');

            Route::get('region-geographic', 'RegionController@regionGeographic');

            Route::get('region-telecom', 'RegionController@regionTelecom');

            Route::get('state', 'RegionController@state');

            Route::get('city', 'RegionController@city');

            Route::get('distribuition-by-step', 'RegionController@distribuitionByStep');

            Route::get('holiday', 'RegionController@holiday');

        });

    });

    Route::get('test-db', function() {
        try {
            \Illuminate\Support\Facades\DB::connection()->getPdo();

            return response([
                'message' => 'Conectado com sucesso'
            ]);
        } catch (\Exception $e) {
            return response([
                'message' => "Could not connect to the database.  Please check your configuration. error:" . var_dump($e)
            ]);
        }
    });


});
