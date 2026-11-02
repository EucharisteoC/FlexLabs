<?php
    $total = 350000;
    $diskon = 0;

    if($total >= 1000000){
        $diskon = 0.15;
    }elseif($total >= 500000){
        $diskon = 0.10;
    }elseif($total >= 250000){
        $diskon = 0.05;
    }else{
        $diskon = 0;
    }

    $isMember = true;

    if(!isMember){}

?>