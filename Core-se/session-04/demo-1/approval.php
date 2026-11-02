<?php
    $total_purchase =250000;

    if($total_purchase <=0){
        echo "Invalid purchase amount.";
    }elseif($total_purchase >= 5000000){
        echo "Butuh approval dari manager.";
    }elseif($total_purchase >= 1000000){
        echo "Butuh approval dari supervisor.";
    }else{
        echo "Approved.";
    }

?>