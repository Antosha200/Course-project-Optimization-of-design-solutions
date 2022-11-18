<?php

class Solver
{
    /*
     * Функция нахождения оптимального размера заказа
     */
    public static function findOptimalSize($q, $D, $K, $h, $c): float
    {
        $ym = sqrt((2 * $K * $D / $h));

        if ($q < $ym) {
            self::defineZone(1);
            return round($ym);
        } else {
            $DC1 = $D * $c;
            $Q = $DC1 + ($K * $D / $ym) + (($h / 2) * $ym);

            if ($q <= $Q) {
                self::defineZone(2);
                return round($q);
            } else {
                self::defineZone(3);
                return round($ym);
            }
        }
    }

    /*
     * Функция нахождения точки возобновления заказа
     */
    public static function findOrderRenewalPoint($y, $L, $D)
    {
        $t0 = $y / $D; //Вычисление длины цикла

        if ($L > $t0) {
            $n = intval(($L / $t0));
            $Le = round($L - ($n * $t0));
            return $Le * $D;
        } else {
            return round($t0);
        }
    }

    public static function defineZone($zoneNumber)
    {
        switch ($zoneNumber) {
            case 1:
                echo "<br>" . "<div align='center' xmlns=\"http://www.w3.org/1999/html\">" . "Определена зона " . "<font color='#8a2be2'>" . "<b>" . "1". "</font>" . "</div>";
                echo "<div align='center'>" . "<img src='/img/zone_1.png'>" . "</div>";
                break;
            case 2:
                echo "<br>" . "<div align='center' xmlns=\"http://www.w3.org/1999/html\">" . "Определена зона " . "<font color='#a52a2a'>" . "<b>" . "2". "</>" . "</div>";
                echo "<div align='center'>" . "<img src='/img/zone_2.png'>" . "</div>";
                break;
            case 3:
                echo "<br>" . "<div align='center' xmlns=\"http://www.w3.org/1999/html\">" . "Определена зона " . "<font color='#6495ed'>" . "<b>" . "3". "</>" . "</div>";
                echo "<div align='center'>" . "<img src='/img/zone_3.png'>" . "</div>";
                break;
            default:
                echo "<br>" . "<div align='center' xmlns=\"http://www.w3.org/1999/html\">" . "Не удалось определить зону" . "<br>" . "Убедитесь, что введены все необходимые данные". "</div>";
        }
    }


}
