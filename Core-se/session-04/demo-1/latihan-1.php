<?php
    $total_purchase = 300000;
    $shipping_fee = 20000;
    $isMember = true;

    if($total_purchase <= 0){
        echo "Invalid purchase amount.";
    } elseif($isMember == true && $total_purchase >= 300000){
        $shipping_fee = 0;
        echo "Free shipping!";
    } elseif($isMember == false && $total_purchase >= 500000){
        $shipping_fee = 0;
        echo "Free shipping!";
    } else {
        echo "Shipping fee: Rp" . $shipping_fee;
    }
?>