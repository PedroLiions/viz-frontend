<?php

namespace App\Services\Dashboards;

use App\Services\NumberService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Cache;
use Illuminate\Support\Facades\Redis;

class BestTimeService
{
    private NumberService $numberService;

    private $db;

    private string $query = "select
                    [hour] as 'Hora',
                    sum([Tentativa]) as 'Tentativas',
                    sum([Atendida]) as 'Atendidas',
                    sum([CPC]) as 'CPC',
                    sum([CPCA]) as 'CPCA',
                    sum([Promessa]) as 'Promessas',
                    avg([TMA]) as 'TMA',
                    sum([Improdutivo]) as 'Improdutivo',
                    sum([desconheceCliente]) as 'Incorreto'
                from
                    ftAnalyticsIndicadoresV2 with (nolock)
                WHERE
                      Date >= :date
                  AND Date <= :date
                  AND client = 'BRADESCO'
                group by hour
                order by hour";

    public function __construct(
        NumberService $numberService
    )
    {
        $this->numberService = $numberService;

        $this->db = DB::connection('sqlsrv');
    }

    public function getDistributionByHour($params = [])
    {
        return $this->getDistributionByHourFromCache($params, ['CPC', 'CPCA'], true);
    }

    public function getDistributionByHourFromCache($params, $unsetFields, $calcTotal)
    {
        if ($params) {
            return $this->calcDistributionByHour($params, $unsetFields, $calcTotal);
        }

        return Cache::remember('distribution-by-hour', 3600, function () use ($params, $unsetFields, $calcTotal) {
            return $this->calcDistributionByHour($params, $unsetFields, $calcTotal);
        });
    }

    /**
     * @param array $params
     * @param array $unsetFields
     * @param $calcTotal
     * @return array
     */
    public function calcDistributionByHour($params = [], $unsetFields = [], $calcTotal = true)
    {
        $date_today = Carbon::now()->format('Y-m-d');

        $data = $this->db->select($this->query, ['date' => $date_today]);

        # calc %cpc, %cpca, %negc
        $data = array_map(function ($item) use ($unsetFields) {
            $percentCPC = ($item->CPC > 0) ? (
                    $item->CPC / (($item->Atendidas !== 0) ? $item->Atendidas : 0)
                ) * 100
                : 0;

            $percentCPCA = ($item->CPCA > 0) ? (
                    $item->CPCA / (($item->Atendidas !== 0) ? $item->Atendidas : 0)
                ) * 100
                : 0;

            $percentNegc = ($item->Promessas > 0) ? (
                    $item->Promessas / (($item->CPCA !== 0) ? $item->CPCA : 0)
                ) * 100
                : 0;

            $item->Hora = "{$item->Hora}h";
            $item->Tentativas = $this->numberService->formatThousands($item->Tentativas);
            $item->Atendidas = $this->numberService->formatThousands($item->Atendidas);
            $item->{'%CPC'} = $this->numberService->formatPercent($percentCPC);
            $item->{'%CPCA'} = $this->numberService->formatPercent($percentCPCA);
            $item->Negociações = $this->numberService->formatThousands($item->Promessas);
            $item->{'%Negc'} = $this->numberService->formatPercent($percentNegc);

            foreach ($unsetFields as $removedField) {
                unset($item->{$removedField});
            }

            return $item;
        }, $data);

        /* if exist calcTotal, add to data */
        if ($calcTotal) {
            $dataTotal = $this->calcRowTotal($data);

            array_unshift($data, $dataTotal);
        }

        return $data;
    }

    public function calcRowTotal($data)
    {
        $dataTotal = (object) [];

        $dataTotal->Hora = 'Total';
        $dataTotal->Tentativas = array_reduce($data, fn($sum, $item) => $sum + (int) $item->Tentativas ?? 0
            );
        $dataTotal->Atendidas = array_reduce($data, fn($sum, $item) => $sum + $item->Atendidas);

        #calc total cpc
        $totalCPC = array_reduce($data, fn($sum, $item) => $sum + $item->CPC);
        $percentCPC = ($totalCPC > 0) ? (
                $totalCPC / (($dataTotal->Tentativas !== 0) ? $dataTotal->Tentativas : 1)
            ) * 100
            : 0;
        $dataTotal->{'%CPC'} = $this->numberService->formatPercent($percentCPC);

        #calc total cpca
        $totalCPCA = array_reduce($data, fn($sum, $item) => $sum + $item->CPCA);
        $percentCPCA = ($totalCPCA > 0) ? (
                $totalCPCA / (($totalCPC !== 0) ? $totalCPC : 1)
            ) * 100
            : 0;
        $dataTotal->{'%CPCA'} = $this->numberService->formatPercent($percentCPCA);

        #calc negociacoes
        $negociacoes = array_reduce($data, fn($sum, $item) => $sum + $item->Promessas);

        $percentNegc = ($negociacoes > 0) ? (
                $negociacoes / (($totalCPCA !== 0) ? $totalCPCA : 1)
            ) * 100
            : 0;

        $dataTotal->{'Negociações'} = $this->numberService->formatThousands($negociacoes);
        $dataTotal->{'%Negc'} = $this->numberService->formatPercent($percentNegc);
        $dataTotal->Tentativas = $this->numberService->formatThousands($dataTotal->Tentativas);
        $dataTotal->Atendidas = $this->numberService->formatThousands($dataTotal->Atendidas);

        return $dataTotal;
    }

    public function getGraphics($params = [])
    {
        $data = $this->calcDistributionByHour($params, [], false);

        $attemptsByHour = $this->getGraphicsFormated($data, 'Tentativas');
        $cpcByHour = $this->getGraphicsFormated($data, 'CPC');
        $cpcaByHour = $this->getGraphicsFormated($data, 'CPCA');
        $answeredByHour = $this->getGraphicsFormated($data, 'Atendidas');
        $dealsByHour = $this->getGraphicsFormated($data, 'Negociações');
        $tmaByHour = $this->getGraphicsFormated($data, 'TMA');
        $improductiveByHour = $this->getGraphicsFormated($data, 'Improdutivo');
        $incorrectByHour = $this->getGraphicsFormated($data, 'Incorreto');

        return [
            'attemptsByHour' => $attemptsByHour,
            'cpcByHour' => $cpcByHour,
            'cpcaByHour' => $cpcaByHour,
            'answeredByHour' => $answeredByHour,
            'dealsByHour' => $dealsByHour,
            'tmaByHour' => $tmaByHour,
            'improductiveByHour' => $improductiveByHour,
            'incorrectByHour' => $incorrectByHour
        ];
    }

    public function getGraphicsFormated($data, $field) {
        return array_map(function($hour) use ($field) {
            return (object) [
                'hour' => $this->numberService->onlyNumbers($hour->Hora),
                'value' => $this->numberService->onlyNumbers($hour->{$field}) ?? 0
            ];
        }, $data);
    }

}
