<?php

// Scenario 1
$total = 500000;
$city = "Jakarta";

echo "Scenario 1<br>";
echo "Total: Rp$total<br>";
echo "City: $city<br>";

if ($total <= 0) {
    echo "Result: Invalid Order";
} elseif ($total >= 500000 && $city == "Jakarta") {
    echo "Result: Priority Delivery";
} elseif ($total >= 300000) {
    echo "Result: Free Standard Delivery";
} else {
    echo "Result: Regular Delivery - Shipping Fee Rp20.000";
}

echo "<br><br>";

// Scenario 2
$total = 500001;
$city = "Jakarta";

echo "Scenario 2<br>";
echo "Total: Rp$total<br>";
echo "City: $city<br>";

if ($total <= 0) {
    echo "Result: Invalid Order";
} elseif ($total >= 500000 && $city == "Jakarta") {
    echo "Result: Priority Delivery";
} elseif ($total >= 300000) {
    echo "Result: Free Standard Delivery";
} else {
    echo "Result: Regular Delivery - Shipping Fee Rp20.000";
}

echo "<br><br>";

// Scenario 3
$total = 499999;
$city = "Jakarta";

echo "Scenario 3<br>";
echo "Total: Rp$total<br>";
echo "City: $city<br>";

if ($total <= 0) {
    echo "Result: Invalid Order";
} elseif ($total >= 500000 && $city == "Jakarta") {
    echo "Result: Priority Delivery";
} elseif ($total >= 300000) {
    echo "Result: Free Standard Delivery";
} else {
    echo "Result: Regular Delivery - Shipping Fee Rp20.000";
}

echo "<br><br>";

// Scenario 4
$total = 500000;
$city = "Bandung";

echo "Scenario 4<br>";
echo "Total: Rp$total<br>";
echo "City: $city<br>";

if ($total <= 0) {
    echo "Result: Invalid Order";
} elseif ($total >= 500000 && $city == "Jakarta") {
    echo "Result: Priority Delivery";
} elseif ($total >= 300000) {
    echo "Result: Free Standard Delivery";
} else {
    echo "Result: Regular Delivery - Shipping Fee Rp20.000";
}

echo "<br><br>";

// Scenario 5
$total = 300000;
$city = "Bandung";

echo "Scenario 5<br>";
echo "Total: Rp$total<br>";
echo "City: $city<br>";

if ($total <= 0) {
    echo "Result: Invalid Order";
} elseif ($total >= 500000 && $city == "Jakarta") {
    echo "Result: Priority Delivery";
} elseif ($total >= 300000) {
    echo "Result: Free Standard Delivery";
} else {
    echo "Result: Regular Delivery - Shipping Fee Rp20.000";
}

echo "<br><br>";

// Scenario 6
$total = 299999;
$city = "Bandung";

echo "Scenario 6<br>";
echo "Total: Rp$total<br>";
echo "City: $city<br>";

if ($total <= 0) {
    echo "Result: Invalid Order";
} elseif ($total >= 500000 && $city == "Jakarta") {
    echo "Result: Priority Delivery";
} elseif ($total >= 300000) {
    echo "Result: Free Standard Delivery";
} else {
    echo "Result: Regular Delivery - Shipping Fee Rp20.000";
}

echo "<br><br>";

// Scenario 7
$total = 100000;
$city = "Jakarta";

echo "Scenario 7<br>";
echo "Total: Rp$total<br>";
echo "City: $city<br>";

if ($total <= 0) {
    echo "Result: Invalid Order";
} elseif ($total >= 500000 && $city == "Jakarta") {
    echo "Result: Priority Delivery";
} elseif ($total >= 300000) {
    echo "Result: Free Standard Delivery";
} else {
    echo "Result: Regular Delivery - Shipping Fee Rp20.000";
}

echo "<br><br>";


// Scenario 8
$total = -1;
$city = "Bandung";

echo "Scenario 8<br>";
echo "Total: Rp$total<br>";
echo "City: $city<br>";

if ($total <= 0) {
    echo "Result: Invalid Order";
} elseif ($total >= 500000 && $city == "Jakarta") {
    echo "Result: Priority Delivery";
} elseif ($total >= 300000) {
    echo "Result: Free Standard Delivery";
} else {
    echo "Result: Regular Delivery - Shipping Fee Rp20.000";
}

echo "<br><br>";

?>