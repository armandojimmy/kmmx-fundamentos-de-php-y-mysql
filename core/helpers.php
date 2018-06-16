<?php
    function startsWith(string $haystack, string $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    function endsWith(string $haystack, string $needle)
    {
        $length = strlen($needle);
        return $length === 0 ||
        (substr($haystack, -$length) === $needle);
    }


    function MyConnection()
    {
        $serverName = "localhost";
        $userName = "armando";
        $userPass = "jimmy";
        $dbSchema = "ecommerce";

        $conn = new mysqli($serverName, $userName , $userPass,$dbSchema);
        if($conn->connect_error)
        {
            die("Connection failed:". $conn->connect_error);
        }

        $sql = "select * from users";
        $resultado = $conn->query($sql);

        if($resultado->num_rows > 0) {
            echo $resultado->num_rows . " Fila(s) encontrada(s)";
        }
        else {
            echo "No hay resultados";
        }

        $conn->close();

        return $conn;


    }