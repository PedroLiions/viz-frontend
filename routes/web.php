<?php

use Illuminate\Support\Facades\Route;

Route::get('', function () {
    $query = "select
    top(20)
    *

from
    ftAnalyticsIndicadoresV2
WHERE
        Date >= '2020-11-11'
  AND Date <= '2020-11-12'
  AND CPCA IS NOT NULL
  AND Mailing IS NOT NULL";

    $result = \Illuminate\Support\Facades\DB::connection('sqlsrv')->select($query);

    dd($result);
});
