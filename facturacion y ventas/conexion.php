<?php
    $host = 'localhost:3307';
    $user = 'root';
    $password = '';
    $db = 'facturacion';

    $conection = @mysqli_connect($host,$user,$password,$db);

    

    if(!$conection){
            echo "Error en la conexión";
    }
    ?>
    