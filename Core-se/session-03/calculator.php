<?php
    $product_name = "Mouse";

    $price = 10000;
    $quantity = 5;

    $total = $price * $quantity;

    echo $total;

    echo '<hr>';
    
    $rating = 4.5;

    echo "Rating :". $rating;

    echo '<hr>';
    echo 'Boolean';
    echo '<br>';
    $name = "Budi";
    $age = 40;
    $address = "Cisauk";
    $is_member = true;

    echo $name;
    echo "Status member: ";
    if($is_member == true){ 
        echo "Member";
    }else{ 
        echo "Bukan Member";
    }

?>