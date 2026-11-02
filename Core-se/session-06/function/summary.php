<?php
    $transactions = [1000000, 2000000, 990000, 300000, 200000, 100000];
    $january_transactions = [1000000, 2000000, 990000, 300000, 200000, 100000, 1000000, 2000000, 990000, 300000, 200000, 100000];

    function calculateTotalTransaction($data){
        $total = 0;

        foreach($data as $dt){
            $total += $dt;
        }
        return $total;
    }

    function calculateDiscount($transactions, $discount){
        $totalTransaction = calculateTotalTransaction($transactions);

        $totalPrice = 0;
        if($totalTransaction > 9000000){
            $totalPrice = $totalTransaction - ($totalTransaction * $discount / 100);
        }
        else{
            $totalPrice = $totalTransaction;
        }
        return $totalPrice;
    }

    echo calculateTotalTransaction($transactions);
    echo "<hr>";
    echo calculateTotalTransaction($january_transactions);
    echo "<hr>";
    echo calculateDiscount($january_transactions, 10);

    
?>