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
            'Contratos',
            'Agentes',
            'Tentativas',
            'Tent/ Agnt',
            '%Hit rate',
            'Atendidas',
            'CPC',
            'CPC/ Agnt',
            '%CPC/ Atend',
            'CPCA',
            'CPCA /Agnt',
            '%CPCA/ Atend',
            'Negociações',
            'Negc /Agnt',
            '%Negc/ Tent',
            '%Negc/ Atend',
            '%Negc /CPC',
            '%Negc /CPCA',
            '%Improd',
            '%Linha muda',
            '%Voz Máq',
            'Spin rate',
            '%Incorreto',
        ];

        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = (object) [
                'Indicador' => $colunas[$i],
                'TOTAL' => mt_rand(800000, 999999),
                'Oliveira' => mt_rand(000000, 300000),
                'Toledo' => mt_rand(000000, 300000),
                'Rn' => mt_rand(000000, 300000),
                'Bellinati' => mt_rand(000000, 300000),
                'Flex' => mt_rand(000000, 300000),
                'Crc' => mt_rand(000000, 300000),
                'Pasquali' => mt_rand(000000, 300000),
                'Pasquali1' => mt_rand(000000, 300000),
                'Pasquali2' => mt_rand(000000, 300000),
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
                $data[$i] = (object) [
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
