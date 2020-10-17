<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FunnelController extends Controller
{
    public function resumeFinancialByPortfolio()
    {
        $data = [];

        $colunas = [
            'Cliente',
            'R$ Contratos',
            'Ticket Médio',
            'R$ negc',
            '%Negc',
            'RS pago',
            '%Efetividade',
            '%Liquidado'
        ];

        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = (object) [
                'Empresa' => $colunas[$i],
                'TOTAL' => mt_rand(00000, 99999),
                'A1' => mt_rand(00000, 99999),
                'Crc' => mt_rand(00000, 99999),
                'System' => mt_rand(000000, 999999),
                'Services' => mt_rand(000000, 999999),
                'Paschoalotto' => mt_rand(000000, 999999),
                'Paschoalotto0' => mt_rand(000000, 999999),
                'Paschoalotto1' => mt_rand(000000, 999999),
                'Paschoalotto2' => mt_rand(000000, 999999),
                'Paschoalotto3' => mt_rand(000000, 999999),
            ];

        }

        return response()->json([
            'data' => $data,
            'page' => 1,
            'total' => 100,
            'per_page' => 10,
            'last_page' => 10
        ]);
    }

    public function panelComparativeCompany()
    {
        $data = [];

        $colunas = [
            'Total of portfolio',
            '%Penetrated',
            'Attempts',
            'Answered',
            'CPC',
            'CPCA',
            'Deals'
        ];

        for ($i = 0; $i < count($colunas); $i++) {


            $data[$i] = (object) [
                'TOTAL' => $colunas[$i],
                'A1' => mt_rand(000000, 999999),
                'Crc' => mt_rand(000000, 999999),
                'System' => mt_rand(000000, 999999),
                'Paschoalotto' => mt_rand(000000, 999999),
                'Services' => mt_rand(000000, 999999),
            ];
        }

        return response()->json([
            'data' => $data,
            'page' => 1,
            'total' => 100,
            'per_page' => 10,
            'last_page' => 10
        ]);
    }
}
