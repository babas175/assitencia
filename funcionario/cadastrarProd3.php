<?php

    include("conexao.php");

    $id =$_POST['id'];
    $nome =$_POST['nome'];
    $valor =$_POST['valor'];
  
    
    


    $sql=" INSERT INTO produtos (idP,nome,valor) 
            VALUES ('$id' ,'$nome','$valor')";


    if(mysqli_query($conexao, $sql)){
        echo header('Location: Success1.php');
    }
    else{
        echo "Erro nao foi possivel cadastrar esse funcionario verificar os dados ou tenta de novo".mysqli_connect_error();
    }
    mysqli_close($conexao);


   

?>