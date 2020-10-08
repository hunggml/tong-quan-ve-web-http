<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<style>
    fieldset {
        width: 350px;
    }

    #pass {
        width: 300px;
        height: 30px;
    }

    #user {
        width: 300px;
        height: 30px;
    }


</style>
<form action="" method="post">
    <fieldset>
        <div>
            <h1>Login</h1>
            <input id="user" name="user" type="text" placeholder="username"><br/><br/>
            <input id="pass" name="pass" type="password" placeholder="password"><br/><br/>
            <input type="submit" value="Sign in">
        </div>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    if ($user==="admin"&&$pass==="admin")
    {
        echo "<h2>Welcome <span style='color:red'>" .$user. "</span> to website</h2>";
    } else{
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
}
?>

