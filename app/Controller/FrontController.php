<?php

class FrontController
{
    public $priceBreakPoint; //точка разрыва цены q
    public $demandIntensity; //интенсивность спроса D
    public $costOfMakingOrder; //затраты на оформление заказа K
    public $costOfStoringOrderUnit; //затраты на хранение единицы заказа hp
    public $unitPrice; //цена единицы продукции c
    public $orderCompletionPeriod; //срок выполнения заказа (дней) L

    public static function getInstance()
    {
        static $instance;
        if (!isset($instance)) $instance = new self;
        return $instance;
    }

    public function getData($priceBreakPoint, $demandIntensity, $costOfMakingOrder, $costOfStoringOrderUnit, $unitPrice, $orderCompletionPeriod)
    {
        $this->priceBreakPoint = $priceBreakPoint;
        $this->demandIntensity = $demandIntensity;
        $this->costOfMakingOrder = $costOfMakingOrder;
        $this->costOfStoringOrderUnit = $costOfStoringOrderUnit;
        $this->unitPrice = $unitPrice;
        $this->orderCompletionPeriod = $orderCompletionPeriod;
    }

    /**
     * @throws Exception
     */
    public function makeRoute()
    {
        echo PHPTemplate::view("app/Templates/FormPage.php");

        if (!isset($this->priceBreakPoint)) {
            $this->priceBreakPoint = 100;
        }

        if (!isset($this->unitPrice)) {
            $this->unitPrice = 1;
        }

        if (isset($_POST['PriceBreakPoint'])) {

            $orderQuantity = Solver::findOptimalSize($this->priceBreakPoint, $this->demandIntensity, $this->costOfMakingOrder, $this->costOfStoringOrderUnit, $this->unitPrice);
            $orderRenewalPoint = Solver::findOrderRenewalPoint($orderQuantity, $this->orderCompletionPeriod, $this->demandIntensity);

            echo PHPTemplate::view("app/Templates/AnswerPage.php", ['orderQuantity' => $orderQuantity, 'orderRenewalPoint' => $orderRenewalPoint]);

        }
    }
}

