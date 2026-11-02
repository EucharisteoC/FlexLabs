<?php

$total = 550000;
$city = "Jakarta";

if ($total <= 0) {
    echo "Invalid Order";
} elseif ($total >= 500000 && $city == "Jakarta") {
    echo "Priority Delivery";
} elseif ($total >= 300000) {
    echo "Free Standard Delivery";
} else {
    echo "Regular Delivery - Shipping Fee Rp20.000";
}

?>