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
                echo "<div align='center'>" . "<img src='/img/zone%201.png'>" . "</div>";
                // Нарисовать картинки самому ? (Плохое качество)
                // Данные чтобы сохранялись в форме
                // Подобрать тестовые данные для каждой зоны
                break;
            case 2:
                echo 2;
                break;
            case 3:
                echo 3;
                break;
        }
    }


}
