<?php
echo "<form method='post'>";
echo "Nama: <input type='text' name='nama'><br><br>";
echo "Jumlah Loop: <input type='number' name='jumlah'><br><br>";
echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";

if (isset($_POST['submit'])) {
    for ($i = 1; $i <= $_POST['jumlah']; $i++) {
        echo $_POST['nama'] . "<br>";
    }
}
?>
