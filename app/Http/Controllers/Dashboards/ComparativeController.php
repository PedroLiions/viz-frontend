<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComparativeController extends Controller
{
    public function comparativeByCompany()
    {
        $data = [];

        $colunas = [
            'TOTAL',
            'Indicador',
            'Oliveira',
            'Toledo',
            'Rn',
            'Bellinati',
            'Flex',
            'Crc',
            'Pasquali',
            'Pasquali1',
            'Pasquali2',
        ];

        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = (object) [
                'Agentes' => $colunas[$i],
                'Contratos' => number_format(mt_rand(000000, 300000), 2, ',', '.'),
                'Tentativas' => number_format(mt_rand(000000, 300000), 2, ',', '.'),
                'Spin rate' => number_format(mt_rand(000000, 300000), 2, ',', '.'),
                'Tent /Agnt' => number_format(mt_rand(000000, 300000), 2, ',', '.'),
                '%Incorreto' => number_format(mt_rand(00, 100), 2, ',', '.'),
                'Atendidas' => number_format(mt_rand(000000, 300000), 2, ',', '.'),
                '%Hit rate' => number_format(mt_rand(00, 100), 2, ',', '.'),
                'CPC' => number_format(mt_rand(000000, 300000), 2, ',', '.'),
                '%CPC /Aten' => number_format(mt_rand(00, 100), 2, ',', '.'),
                'CPC /Agnt' => number_format(mt_rand(000000, 300000), 2, ',', '.'),
                'CPCA' => number_format(mt_rand(000000, 300000), 2, ',', '.'),
                '%CPCA /Aten' => number_format(mt_rand(00, 100), 2, ',', '.'),
                'CPCA /Agnt' => number_format(mt_rand(000000, 300000), 2, ',', '.'),
                'Negociações' => number_format(mt_rand(000000, 300000), 2, ',', '.'),
                '%Negc /Atend' => number_format(mt_rand(00, 100), 2, ',', '.'),
                '%Negc /Tent' => number_format(mt_rand(00, 100), 2, ',', '.'),
                '%Negc /CPC' => number_format(mt_rand(00, 100), 2, ',', '.'),
                '%Negc /CPCA' => number_format(mt_rand(00, 100), 2, ',', '.'),
                'Negc /Agnt' => number_format(mt_rand(000000, 300000), 2, ',', '.'),
                '%Improd' => number_format(mt_rand(00, 100), 2, ',', '.'),
                '%Linha muda' => number_format(mt_rand(00, 100), 2, ',', '.'),
                '%Voz Máq' => number_format(mt_rand(00, 100), 2, ',', '.'),
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

    public function resumeByCompany()
    {
        {
            $data = [];

            $ocurrence = [
                'Segmento',
                'Empresa',
                'Faixa Atraso',
                'Tentativas',
                '%Hit rate',
                '%CPC',
                '%CPCA',
                'Negociações',
                '%Negc'
            ];

            for ($i = 0; $i < count($ocurrence); $i++) {
                $data[$i] = (object)[
                    'Perfil' => 'PF',
                    'Segmento' => 'Consignado',
                    'Empresa' => 'Flex',
                    'Faixa Atraso' => '15-60',
                    'Tentativas' => mt_rand(000000, 999999),
                    '%Hit rate' => mt_rand(00, 99) . "%",
                    '%CPC' => mt_rand(00, 99) . "%",
                    '%CPCA' => mt_rand(00, 99) . "%",
                    'Negociações' => mt_rand(000000, 999999),
                    '%Negc' => mt_rand(00, 99) . "%",
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
}
