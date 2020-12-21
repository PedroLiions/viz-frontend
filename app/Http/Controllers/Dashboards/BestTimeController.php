<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use App\Services\Dashboards\BestTimeService;
use App\Services\PermissionService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BestTimeController extends Controller
{
    private PermissionService $permissionService;
    private BestTimeService $bestTimeService;

    public function __construct(
        PermissionService $permissionService,
        BestTimeService $bestTimeService
    ) {
        $this->permissionService = $permissionService;
        $this->bestTimeService = $bestTimeService;
    }


    public function distributionByHour() {
        $this->permissionService->hasPermission('Agents', 'read');

        $params = request()->all();

        $data = $this->bestTimeService->getDistributionByHour($params);

        return response()->json([
            'data' => $data,
            'page' => 1,
            'total' => 100,
            'per_page' => 10,
            'last_page' => 10
        ]);
    }

    public function bestTimeGraphics()
    {
        $this->permissionService->hasPermission('Agents', 'read');

        $params = request()->all();

        $data = $this->bestTimeService->getGraphics($params);

        return response()->json([
            'data' => $data,
            'page' => 1,
            'total' => 100,
            'per_page' => 10,
            'last_page' => 10
        ]);
    }
}
