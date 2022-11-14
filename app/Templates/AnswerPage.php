<!DOCTYPE html>
<html>
<head>
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="result">
    <?php
    echo "Оптимальная стратегия заказа: <br>";

    if (isset($orderQuantity)) {
    echo "Заказать " . $orderQuantity . " единиц товара, как только его запас уменьшится до ";
    }

    if (isset($orderRenewalPoint)) {
    echo $orderRenewalPoint . " штук";
    }
    ?>
</div>
</body>
</html>

