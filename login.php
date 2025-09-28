<?php
session_start();
require 'db/conn.php';

if($_POST){
    $username =$_POST["username"];
    $password =$_POST["password"];

    




}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label >Username</label>
        <input type="text" name="username" id="username">
        <label >Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="submit">
    </form>
</body>
</html>