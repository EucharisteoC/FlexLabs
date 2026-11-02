<?php

    $products = ["Laptop","Mouse"];

    //Membaca data
    echo "$products[0]";

    //Menambahkan data
    $products[] = "Keyboard";
    $products[] = "Hardisk";

    //Update data
    $products[1] = "Wireless Mouse";

    //Menghapus data
    unset($products[3]);

    print_r($products)

?>