<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function regionGeographic()
    {
        $data = [];

        $colunas = [
            'Tentativas',
            'Atendidas',
            '%Hit rate',
            '%CPC',
            '%Negociações',
            '%Negc',
            '%Improd',
            '%Mute',
            '%Machine',
            '%Incorreto',
            'TMA'
        ];



        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = (object) [
                'Região' => $colunas[$i],
                'TOTAL' => mt_rand(000000, 999999),
                'Sudeste' => mt_rand(000000, 999999),
                'Sul' => mt_rand(000000, 999999),
                'Centro-oeste' => mt_rand(000000, 999999),
                'Norte' => mt_rand(000000, 999999),
                'Nordeste' => mt_rand(000000, 999999),
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

    public function regionTelecom()
    {
        $data = [];

        $colunas = [
            'Tentativas',
            'Atendidas',
            '%Hit rate',
            '%CPC',
            '%Negociações',
            '%Negc',
            '%Improd',
            '%Mute',
            '%Machine',
            '%Incorreto',
            'TMA'
        ];

        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = (object) [
                'Região' => $colunas[$i],
                'TOTAL' => mt_rand(000000, 999999),
                'Região I' => mt_rand(000000, 999999),
                'Região II' => mt_rand(000000, 999999),
                'Região III' => mt_rand(000000, 999999)
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

    public function state()
    {
        $data = [];

        $colunas = [
            'Região',
            'Tentativas',
            'Atendidas',
            '%Hit rate',
            '%CPC',
            '%Negociações',
            '%Negc',
            '%Improd',
            '%Mute',
            '%Machine',
            '%Incorreto',
            'TMA'
        ];

        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = (object) [
                'Data' => $colunas[$i],
                'TOTAL' => mt_rand(000000, 999999),
                'AC' => mt_rand(00, 99),
                'AL' => mt_rand(00, 99),
                'AP' => mt_rand(00, 99),
                'AM' => mt_rand(00, 99),
                'BA' => mt_rand(00, 99),
                'CE' => mt_rand(00, 99),
                'DF' => mt_rand(00, 99),
                'ES' => mt_rand(00, 99),
                'GO' => mt_rand(00, 99),
                'MA' => mt_rand(00, 99),
                'MT' => mt_rand(00, 99),
                'MS' => mt_rand(00, 99),
                'MG' => mt_rand(00, 99),
                'PA' => mt_rand(00, 99),
                'PB' => mt_rand(00, 99),
                'PR' => mt_rand(00, 99),
                'PE' => mt_rand(00, 99),
                'PI' => mt_rand(00, 99),
                'RJ' => mt_rand(00, 99),
                'RN' => mt_rand(00, 99),
                'RS' => mt_rand(00, 99),
                'RO' => mt_rand(00, 99),
                'RR' => mt_rand(00, 99),
                'SC' => mt_rand(00, 99),
                'SP' => mt_rand(00, 99),
                'SE' => mt_rand(00, 99),
                'TO' => mt_rand(00, 99),
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

    public function city()
    {
        $data = [];

        $colunas = [
            'Região',
            'Tentativas',
            'Atendidas',
            '%Hit rate',
            '%CPC',
            'Negociações',
            '%Negc',
            '%Improd',
            '%Mute',
            '%Machine',
            '%Incorreto',
            'TMA'
        ];

        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = (object) [
                'Data' => $colunas[$i],
                'TOTAL' => mt_rand(000000, 999999),
                'Canudos do Vale' => mt_rand(000000, 999999),
                'Agudo' => mt_rand(000000, 999999),
                'Pirajuba' => mt_rand(000000, 999999),
                'Barbacena' => mt_rand(000000, 999999),
                'Poções' => mt_rand(000000, 999999),
                'Presidente Sarney' => mt_rand(000000, 999999),
                'Joinville' => mt_rand(000000, 999999),
                'Jandaíra' => mt_rand(000000, 999999),
                'Sem-Peixe' => mt_rand(000000, 999999),
                'Pedra Bonita' => mt_rand(000000, 999999),
                'Jari' => mt_rand(000000, 999999)
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

    public function distribuitionByStep()
    {
        $data = [];

        $colunas = [
            'Degrau',
            'Tentativas',
            'Atendidas',
            '%Hit rate',
            '%CPC',
            '%CPCA',
            '%Negc',
        ];

        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = (object) [
                'Data' => $colunas[$i],
                'TOTAL' => mt_rand(000000, 999999),
                'Inter-LDN' => mt_rand(000000, 999999),
                'Intra-LDN' => mt_rand(000000, 999999),
                'Local' => mt_rand(000000, 999999),
                'VC1' => mt_rand(000000, 999999),
                'VC2' => mt_rand(000000, 999999),
                'VC3' => mt_rand(000000, 999999),
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

    public function holiday()
    {
        $data = [];

        $colunas = [
            'Data',
            'Dia',
            'Descrição',
            '%Local',
        ];

        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = (object) [
                'Data' => $colunas[$i],
                '01/01/2020' => mt_rand(000000, 999999),
                '10/04/2020' => mt_rand(000000, 999999),
                '21/04/2020' => mt_rand(000000, 999999),
                '01/05/2020' => mt_rand(000000, 999999),
                '07/09/2020' => mt_rand(000000, 999999),
                '12/10/2020' => mt_rand(000000, 999999),
                '02/11/2020' => mt_rand(000000, 999999),
                '15/11/2020' => mt_rand(000000, 999999),
                '25/12/2020' => mt_rand(000000, 999999),
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
