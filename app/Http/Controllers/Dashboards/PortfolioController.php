<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function resumeFinancialPortfolio()
    {
        $data = [];

        $colunas = [
            'TOTAL',
            'Siscom',
            'Paschoalotto',
            'Flex',
            'Zanc',
            'System',
            'A1',
            'Crn'
        ];



        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = [
                'Empresa' => $colunas[$i],
                'Valor líquido' => mt_rand(000000, 999999),
                'Valor médio' => mt_rand(000000, 999999),
                '%Recuperado' => mt_rand(000000, 999999),
                'Ranking' => mt_rand(000000, 999999),
                'Total carteira' => mt_rand(000000, 999999),
                '%CPC projetado' => mt_rand(000000, 999999),
                'Lucro' => mt_rand(000000, 999999),
                'Valor pago' => mt_rand(000000, 999999),
                'Negociações' => mt_rand(000000, 999999),
                'Valor projetado'  => mt_rand(000000, 999999),
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

    public function resumeByContracts()
    {
        $data = [];

        $colunas = [
            'Faixa Atraso',
            'Segmento',
            'Ocorrência',
            'Total carteira',
            '%Desconto',
            'Valor líquido',
            'Valor pago'
        ];



        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = (object) [
                'Contrato' => $colunas[$i],
                'TOTAL' => mt_rand(000000, 999999),
                '677.505' => mt_rand(000000, 999999),
                '533.949' => mt_rand(000000, 999999),
                '450.855' => mt_rand(000000, 999999),
                '139.975' => mt_rand(000000, 999999),
                '684.954' => mt_rand(000000, 999999),
                '569.039' => mt_rand(000000, 999999),
                '469.948' => mt_rand(000000, 999999),
                '394.877' => mt_rand(000000, 999999),
                '998.508' => mt_rand(000000, 999999)
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
