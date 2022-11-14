<!DOCTYPE html>
<html>
<head>
    <title> Optimization of design solutions </title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<h2 class="Add data"> Please specify the data for the calculation </h2>

<div class="buttons">
    <form action="http://course-project-optimization-of-design-solutions/" id='product_form' method="post">

        <label>Price Break point (q)</label>
        <input type="text" id='PriceBreakPoint' name="PriceBreakPoint" placeholder="Write q" value="100">
        <br><br>

        <label>Demand intensity (D)</label>
        <input type="text" id='DemandIntensity' name="DemandIntensity" placeholder="Write D" value="1500">
        <br><br>

        <label>The cost of making an order (K)</label>
        <input type="text" id='TheCostOfMakingAnOrder' name="TheCostOfMakingAnOrder" placeholder="Write K " value="50">
        <br><br>

        <label>The cost of storing an order unit (h)</label>
        <input type="text" id='TheCostOfStoringAnOrderUnit' name="TheCostOfStoringAnOrderUnit" placeholder="Write h" value="0.02">
        <br><br>

        <label>Unit price (c)</label>
        <input type="text" id='UnitPrice' name="UnitPrice" placeholder="Write c" value="1">
        <br><br>

        <label>Order completion period (L)</label>
        <input type="text" id='OrderCompletionPeriod' name="OrderCompletionPeriod" placeholder="Write L" value="5">
        <br><br>

        <input type="submit" value="Find the optimal solution" class="up">

    </form>

    <?php
        FrontController::getInstance()->getData($_POST['PriceBreakPoint'], $_POST['DemandIntensity'], $_POST['TheCostOfMakingAnOrder'],
        $_POST['TheCostOfStoringAnOrderUnit'], $_POST['UnitPrice'], $_POST['OrderCompletionPeriod']);
    ?>

</div>
</body>
</html>

