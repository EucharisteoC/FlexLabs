<?php
    $Gaji = 100000;
    $Jam_kerja = 10;

    echo "Nama : Budi";
    echo '<br>';
    echo "Gaji per jam : ".number_format($Gaji);
    echo '<br>';
    echo "Total gaji setelah ". $Jam_kerja . " jam kerja adalah : Rp" .number_format($Gaji * $Jam_kerja);

?>
