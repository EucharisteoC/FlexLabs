<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_POST["nama"]."<br>";
    echo $_POST["email"]."<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <input type="text" name="nama" id="nama" placeholder="Input nama">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Input email">
        </div>
        <input type="submit" value="submit">
    </form>
</body>
</html>