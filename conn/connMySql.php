<?php
    $dbname="acesso";
    $dbuser="root";
    $dbpassword="";

    $conn=new mysqli('localhost',$dbuser,$dbpassword,$dbname); #1
    if (mysqli_connect_error()) {
        die('Erro na conexão ('.mysqli_connect_errno().')'.mysqli_connect_error()); #2
    }
?>