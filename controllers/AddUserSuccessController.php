<?php
/**
 * Created by PhpStorm.
 * User: kmmx-03
 * Date: 23/06/18
 * Time: 01:36 PM
 */

$serverName = getenv("MYSQL_SERVER");
$userName = getenv("MYSQL_USERNAME");
$userPass = getenv("MYSQL_PASSWORD");
$dbSchema = getenv("MYSQL_DATABASE");
$salt = getenv("SALT");
$conn = new mysqli($serverName, $userName , $userPass,$dbSchema);

$userName           = $_POST["user_name"];
$userPsw            = $_POST["user_psw"];
$address            = $_POST["user_address"];
$email              = $_POST["user_mail"];
$hashed = crypt($userPsw, $salt);

$sql = "INSERT INTO ecommerce.users VALUES (null,'$userName','$hashed','$address','$email')";
$conn->query($sql);
$msgError = $conn->connect_error . $conn->error;
$conn->close();


