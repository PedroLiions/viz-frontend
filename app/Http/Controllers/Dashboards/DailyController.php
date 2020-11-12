<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    public function summary()
    {
        $data = [];
        $colunas = [];

        $month = Carbon::now()->format('Y-m');
        $start = Carbon::parse($month)->startOfMonth();
        $end = Carbon::parse($month)->endOfMonth();

        while ($start->lte($end)) {

            $colunas[] = $start->format('d/m');

            $start->addDay();
        }



        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = [
                'Data' => $colunas[$i],
                '%Atendida/trabalhadas' => mt_rand(00, 99),
                '%Hit rate' => mt_rand(00, 99),
                '%Negc /Tent' => mt_rand(00, 99),
                '%Efetivas/Atendidas' => mt_rand(00, 99),
                '%Sucesso/Atendidas' => mt_rand(00, 99),
                '%Negc /CPC' => mt_rand(00, 99),
                'Atendidas/Sucesso' => mt_rand(00, 99),
                'Tent /Hora' => mt_rand(00, 99),
                'Atentididas/Hora' => mt_rand(00, 99),
                'Efetivas/Hora' => mt_rand(00, 99),
                'Sucesso/Hora' => mt_rand(00, 99)
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

    public function consolidateFinishByOperator()
    {
        $data = [];
        $colunas = [];

        $month = Carbon::now()->format('Y-m');
        $start = Carbon::parse($month)->startOfMonth();
        $end = Carbon::parse($month)->endOfMonth();

        while ($start->lte($end)) {

            $colunas[] = $start->format('d/m');

            $start->addDay();
        }



        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = [
                'Data' => $colunas[$i],
                'Agend 3º' => mt_rand(000000, 999999),
                'Recado' => mt_rand(000000, 999999),
                'Contato futuro /Lig interrompida' => mt_rand(000000, 999999),
                'Promessa pagto' => mt_rand(000000, 999999),
                'Lig muda' => mt_rand(000000, 999999),
                'Tel incorreto' => mt_rand(000000, 999999),
                'Sec eletrônica /Voz máquina' => mt_rand(000000, 999999),
                'Agend do cliente' => mt_rand(000000, 999999),
                'Não conf dados' => mt_rand(000000, 999999),
                'Alega pagto' => mt_rand(000000, 999999),
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

    public function percentConsolidateFinishByOperator()
    {
        $data = [];
        $colunas = [];

        $month = Carbon::now()->format('Y-m');
        $start = Carbon::parse($month)->startOfMonth();
        $end = Carbon::parse($month)->endOfMonth();

        while ($start->lte($end)) {

            $colunas[] = $start->format('d/m');

            $start->addDay();
        }



        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = [
                'Data' => $colunas[$i],
                'Agend 3º' => mt_rand(00, 99),
                'Recado' => mt_rand(00, 99),
                'Contato futuro /Lig interrompida' => mt_rand(00, 99),
                'Promessa pagto' => mt_rand(00, 99),
                'Lig muda' => mt_rand(00, 99),
                'Tel incorreto' => mt_rand(00, 99),
                'Sec eletrônica /Voz máquina' => mt_rand(00, 99),
                'Agend do cliente' => mt_rand(00, 99),
                'Não conf dados' => mt_rand(00, 99),
                'Alega pagto' => mt_rand(00, 99),
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

    public function consolidateFinishByDialer()
    {
        $data = [];
        $colunas = [];

        $month = Carbon::now()->format('Y-m');
        $start = Carbon::parse($month)->startOfMonth();
        $end = Carbon::parse($month)->endOfMonth();

        while ($start->lte($end)) {

            $colunas[] = $start->format('d/m');

            $start->addDay();
        }



        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = [
                'Data' => $colunas[$i],
                'Sem resposta' => mt_rand(000000, 999999),
                'Secretária eletrônica' => mt_rand(000000, 999999),
                'Não existe' => mt_rand(000000, 999999),
                'Ocupado' => mt_rand(000000, 999999),
                'Abandono' => mt_rand(000000, 999999),
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

    public function percentConsolidateFinishByDialer()
    {
        $data = [];
        $colunas = [];

        $month = Carbon::now()->format('Y-m');
        $start = Carbon::parse($month)->startOfMonth();
        $end = Carbon::parse($month)->endOfMonth();

        while ($start->lte($end)) {

            $colunas[] = $start->format('d/m');

            $start->addDay();
        }



        for ($i = 0; $i < count($colunas); $i++) {

            $data[$i] = [
                'Data' => $colunas[$i],
                'Sem resposta' => mt_rand(00, 99),
                'Secretária eletrônica' => mt_rand(00, 99),
                'Não existe' => mt_rand(00, 99),
                'Ocupado' => mt_rand(00, 99),
                'Abandono' => mt_rand(00, 99),
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
