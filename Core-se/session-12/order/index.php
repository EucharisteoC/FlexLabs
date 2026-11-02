<?php

    /*Cetak output seperti dibawah ini:

    Kafe Senja
    Alamat: GOP 6 BSD
    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    Daftar Menu
    Nama menu: Es Kopi Susu
    Harga: Rp18000
    Status: Tersedia
    
    Nama menu: Americano
    Harga: Rp28000
    Status: Tersedia
    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    RINGKASAN PESANAN
    Nama Pelanggan: Andi
    Menu yang dipesan: Es Kopi Susu
    Harga satuan: Rp18000
    Jumlah pesanan: 3
    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    Total Harga: Rp54000
    */

    require_once "Cafe.php";
    require_once "Menu.php";
    require_once "Order.php";


    // Cafe
    $cafe1 = new Cafe();
    $cafe1->cafeName = "Kafe Senja";
    $cafe1->cafeAddress = "GOP 6 BSD";

    $cafe1->showCafeDetail();

    echo "<hr>";

    // Menu
    echo "<h3>Daftar Menu</h3>";

    $menu1 = new Menu();
    $menu1->menuName = "Es Kopi Susu";
    $menu1->price = 18000;

    $menu2 = new Menu();
    $menu2->menuName = "Americano";
    $menu2->price = 28000;

    $menu1->showDetailMenu();
    echo "<br>";
    $menu2->showDetailMenu();

    echo "<hr>";

    // Order
    $order1 = new Order();
    $order1->customerName = "Andi";
    $order1->menuName = $menu1->menuName;
    $order1->menuPrice = $menu1->price;
    $order1->quantity = 3;

    $order1->showDetailOrder();
?>
   