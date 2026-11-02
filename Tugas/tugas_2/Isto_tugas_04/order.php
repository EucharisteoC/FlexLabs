<?php
    $Nama = "Isto";
    $Produk = "Laptop";
    $Harga = 10000000;
    $Jumlah = 3;
    $Biaya_pengiriman = 50000;

    $Subtotal = $Harga * $Jumlah;
    $Grand_Total = $Subtotal + $Biaya_pengiriman;

    echo "Nama: " . $Nama;
    echo "<br>";
    echo "Produk: " . $Produk;
    echo "<br>";
    echo "Harga: Rp " . number_format($Harga);
    echo "<br>";
    echo "Jumlah: " . $Jumlah;
    echo "<br>";
    echo "Subtotal: Rp " . number_format($Subtotal);
    echo "<br>";
    echo "Biaya Pengiriman: Rp " . number_format($Biaya_pengiriman);
    echo "<br>";
    echo "Grand Total: Rp " . number_format($Grand_Total);

?>