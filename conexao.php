<?php

    $servidor = "assistencia20.mysql.dbaas.com.br";
    $usuario ="assistencia20";
    $senha ="Sophard175";
    $dbname ="assistencia20";

 

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conexao) {
        die("houve um erro: ".mysqli_connect_error());
    }

?>