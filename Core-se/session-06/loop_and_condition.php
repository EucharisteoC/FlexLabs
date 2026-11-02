<?php
    $transactions = [1200000,1000000,800000,300000,400000,500000];
    $higher = 0;
    $under = 0;

    $amount_higher = 0;
    $amount_under = 0;

    foreach($transactions as $transaction){
        if($transaction >= 500000){
            $higher++;
            $amount_higher += $transaction;
        }
        else{
            $under++;
            $amount_under += $transaction;
        }
    }
    
    echo "<h1>Transaksi diatas 500,000<h1>";
    echo "Jumlah transaksi:". $higher;
    echo "Total transaksi: ". $amount_higher;

    echo "<hr>";
    echo "<h1>Transaksi dibawah 500,000<h1>";
    echo "Jumlah transaksi:". $under;
    echo "Total transaksi: ". $amount_under;

?>