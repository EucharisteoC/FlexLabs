<?php
    require_once "Product.php";
    require_once "Order.php";

    $product = new Product("Keyboard Mechanical",200000);

    echo "<h2>PRODUK</h2>";
    echo "Nama: ".$product->getName()."<br>";
    echo "Harga: ".number_format($product->getPrice())."<br>";
    echo "<hr>";


?>