<?php
    $serverName = getenv("MYSQL_SERVER");
    $userName = getenv("MYSQL_USERNAME");
    $userPass = getenv("MYSQL_PASSWORD");
    $dbSchema = getenv("MYSQL_DATABASE");
    $conn = new mysqli($serverName, $userName , $userPass,$dbSchema);
    $productName    = $_POST["product_name"];
    $sku            = $_POST["sku"];
    $price          = $_POST["price"];
    $qty            = $_POST["qty"];
    $sql = "Insert into ecommerce.products values (null,'$productName', '$sku',$qty,null,$price)";
    $conn->query($sql);
    $msgError = $conn->connect_error . $conn->error;
    $conn->close();







