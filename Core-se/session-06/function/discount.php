<?php

    $price = 100000;
    $discount = 10;

    $total_price = $price - ($price * $discount / 100);

    //echo $total_price;

    function calculateDiscount($price, $discount) {
        $total_price = $price - ($price * $discount / 100);
        return $total_price;
    }

    $total_price = calculateDiscount(200000, 10);
    echo $total_price;

    echo "<hr>";

    function displayPrice($price){
        return $price;
    }

    echo displayPrice(15000000);




?>