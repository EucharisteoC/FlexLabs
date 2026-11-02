<?php
    /* Tugas: Buat function untuk menghitung biaya yang dikenai pajak 12%
    Budi membeli makanan seharga 250,000. Dan makanan tersebut biayanya dikenai pajak 12%. 
    Hitung, berapa yang harus budi keluarkan untuk membayar makanan tersebut. */

    $price = 250000;
    $tax = 12;
    echo "Tugas 1: "."<br>";
    function calculateTax($price, $tax) {
        $total_price = $price + ($price * $tax / 100);
        return number_format($total_price);
    }

    $total_price = calculateTax(250000, 12);
    echo "Harga setelah pajak adalah: Rp " . $total_price . "<hr>";

    echo "Tugas 2: "."<br>";

    /* $transactions = [1000000, 2000000, 990000, 300000, 200000, 100000]

    Tugas: 
    1. Cetak dengan menggunakan looping data yang ada di dalam $transactions
    2. Buat function untuk ngecek mana yang transaksi di bawah 500,000 dan transaksi diatas 500,000.

    Outputnya, data transaksi tercetak semua 
    dan jumlah transaksi dibawah 500,000 dan transaksi diatas >= 500,000.

    */

    $transactions = [1000000, 2000000, 990000, 300000, 200000, 100000];

    foreach($transactions as $data){
        echo number_format($data) . "<br>";
    }

    echo "<hr>";

    $below = 0;
    $above = 0;

    function checkTransaction($transactions){
        global $below, $above;

        foreach($transactions as $data){
            if($data < 500000){
                $below++;
            } else {
                $above++;
            }
        }
    }

    checkTransaction($transactions);

    echo "Jumlah transaksi dibawah 500,000: " .number_format($below) . "<br>";
    echo "Jumlah transaksi diatas atau sama dengan 500,000: " . number_format($above);

?>