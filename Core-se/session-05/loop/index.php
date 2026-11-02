<?php

    $transactions = [1000000, 5000000, 3000000, 10000000];
    $total = 0;

    foreach($transactions as $data){
        $total = $total + $data;
    }

    echo $total;

    echo "<hr>";

    $products = ["Mouse", "RAM", "Laptop 13 Inc", "Hard Disk", "Monitor 15inch"];

    foreach($products as $product){
        echo $product . "<br>";
    }



?>