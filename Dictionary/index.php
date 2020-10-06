<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
<form action="" method="post">
    <h1>Tu dien Anh-Viet</h1>
    <input type="text" name="input" placeholder="nhap tu can tim">
    <input type="submit" value="search">

</form>
</body>
</html>
<?php
$dictionary = ["Hello" => "Xin chao", "Hate" => "Ghet", "Bye" => "Tam biet", "Name" => "Ten"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["input"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $search) {
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra.";
    }
}
