<?php

class Solver
{
    /*
     * Функция нахождения оптимального размера заказа
     */
    public static function findOptimalSize($q, $D, $K, $h, $c)
    {
        $ym = sqrt((2 * $K * $D / $h));

        if ($q < $ym) {
            return round($ym);
        } else {
            $DC1 = $D * $c;
            $Q = $DC1 + ($K * $D / $ym) + (($h / 2) * $ym);

            if ($q <= $Q) {
                return round($q);
            } else {
                return round($ym);
            }
        }
    }

    /*
     * Функция нахождения точки возобновления заказа
     */
    public static function findOrderRenewalPoint($y, $L, $D)
    {
        $t0 = $y/$D; //Вычисление длины цикла

         if ($L>$t0){
             $n = intval(($L/$t0));
             $Le = round($L - ($n * $t0));
             return $Le * $D;
         } else {
             return round($t0);
         }
    }


}
