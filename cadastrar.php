<?php

    include("conexao.php");

    $cpf =$_POST['cpf'];
    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $telefone =$_POST['telefone'];
    $senha =$_POST['senha'];
    
    


    $sql=" INSERT INTO cadastrofunc (cpf,nome,email,telefone,senha) 
            VALUES ('$cpf' ,'$nome', '$email', '$telefone', '$senha')";


    if(mysqli_query($conexao, $sql)){
        echo header('Location: Success.php');
    }
    else{
        echo "Erro nao foi possivel cadastrar esse funcionario verificar os dados ou tenta de novo".mysqli_connect_error();
    }
    mysqli_close($conexao);


   

?>