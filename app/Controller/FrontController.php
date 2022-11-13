<?php

class FrontController
{
    public static function getInstance()
    {
        static $instance;
        if (!isset($instance)) $instance = new self;
        return $instance;
    }

    public function makeRoute()
    {
        //получить значения из формы

        $priceBreakPoint = 100; //точка разрыва цены q
        $demandIntensity = 1500; //интенсивность спроса D
        $costOfMakingOrder = 50; //затраты на оформление заказа K
        $costOfStoringOrderUnit = 0.02; //затраты на хранение единицы заказа h
        $unitPrice = 1; //цена единицы продукции c
        $orderCompletionPeriod = 5; //срок выполнения заказа (дней) L

        //посчитать

        $orderQuantity = Solver::findOptimalSize($priceBreakPoint, $demandIntensity, $costOfMakingOrder, $costOfStoringOrderUnit, $unitPrice);
        var_dump($orderQuantity); //столько заказать

        $OrderRenewalPoint =  Solver::findOrderRenewalPoint($orderQuantity, $orderCompletionPeriod, $demandIntensity);
        var_dump($OrderRenewalPoint); // как только их заказ уменьшится до $OrderRenewalPoint

        // вывести в форму


    }
}

