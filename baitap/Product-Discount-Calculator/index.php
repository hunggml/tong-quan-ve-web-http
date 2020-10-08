<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="des" placeholder="Product Description">
    <input type="text" name="price" placeholder="List Price">
    <input type="text" name="percent" placeholder="Discount Percent">
    <button type="submit">Calculate Discount</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $des = $_REQUEST["des"];
    $price = $_REQUEST["price"];
    $percent = $_REQUEST["percent"];

    echo "Discount Amount = " . $price * $percent * 0.1;
    echo "<br/>";
    echo "Discount Price = " . ($price - ($price * $percent * 0.1));
}


