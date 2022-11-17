<!DOCTYPE html>
<html>
<head>
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div align="center" class="result">
    <?php
    echo "<b>" . "Оптимальная стратегия заказа: <br>";

    if (isset($orderQuantity)) {
    echo "Заказать " . "<font color='#dc143c'>" . $orderQuantity . "</font>" . " единиц товара, как только его запас уменьшится до ";
    }

    if (isset($orderRenewalPoint)) {
    echo "<font color='blue'>" . $orderRenewalPoint . "</font>" . " штук." . "</b>";
    }
    ?>
</div>
</body>
</html>

