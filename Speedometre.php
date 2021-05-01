<?php


class Speedometre
{
    private const MILLES_TO_KM_COEF = 0.621371;

    public static function converterKmToMilles(float $km): ?float
    {
        return $km * self::MILLES_TO_KM_COEF;
    }

    public static function converterMillesToKM(float $milles): ?float
    {
        return $milles / self::MILLES_TO_KM_COEF;
    }
}
