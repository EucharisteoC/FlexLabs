<?php

    $submitted = $_SERVER["REQUEST_METHOD"] === 'POST'; //true
    $discountAmount = 0;
    $discountPercent = 0;
    $finalTotal = 0;
    $purchaseTotal = 0;

    if($submitted){
        $discountPercent = (float) ($_POST['discount_percent']);
        $purchaseTotal = (float) ($_POST['purchase_total']);

        $discountAmount = $purchaseTotal * ($discountPercent / 100);
        $finalTotal = $purchaseTotal - $discountAmount;

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Diskon</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <h1 class="title">Kalkulator Diskon</h1>

            <form method="POST" action="">
                <label>Nama Pelanggan</label>
                <input type="text" name="customer_name" id="customer_name" placeholder="Contoh: Budi Santoso">

                <label>Total Belanja (Rp)</label>
                <input type="number" name="purchase_total" id="purchase_total">

                <label>Diskon (%)</label>
                <input type="number" name="discount_percent" id="discount_percent">

                <button type="submit">Hitung Total</button>
            </form>

            <h2>Total yang harus dibayar: <?php echo number_format($finalTotal); ?></h2>
        </section>
    </main>
</body>
</html>