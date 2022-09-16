<?php

    include("conexao.php");

    $valor =$_POST['valor'];
    $opcao =$_POST['opcao'];
    $data1 =$_POST['data'];
    $obs =$_POST['obs'];

    


    $sql=" INSERT INTO fechamento (valor,opcao,data1,obs) 
            VALUES ('$valor' ,'$opcao', '$data1', '$obs')";


    if(mysqli_query($conexao, $sql)){
        echo header('Location: Success.php');
    }
    else{
        echo "Erro nao foi possivel inserir esses dados por favor verificar os dados ou tenta de novo".mysqli_connect_error();
    }
    mysqli_close($conexao);


   

?>