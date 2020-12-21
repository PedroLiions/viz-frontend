<?php

namespace App\Services;

class NumberService {

    public function __construct()
    {
    }

    public function formatPercent($number) {
        $numberFormated = number_format($number, '1', ',', '.');
        $numberWithPercent = "{$numberFormated}%";
        return $numberWithPercent;
    }

    public function formatThousands($number)
    {
        if ($number) {
            return number_format($number, '0', '', '.');
        }

        return 0;
    }

    public function onlyNumbers($string) {
        return preg_replace('/\D/', '', $string);
    }

}
