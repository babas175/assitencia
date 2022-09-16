<?php

    include("conexao.php");

    $nome =$_POST['nome'];
    $telefone =$_POST['telefone'];
    $modelo =$_POST['modelo'];
    $defeito =$_POST['defeito'];
    $data1 =$_POST['data1'];
    $valor =$_POST['valor'];
    $data_entrega =$_POST['data_entrega'];
    $obs =$_POST['obs'];
  
    
    


    $sql=" INSERT INTO ordem (nome,telefone,modelo,defeito,data1,valor,data_entrega,observacao) 
            VALUES ('$nome','$telefone','$modelo','$defeito','$data1','$valor','$data_entrega','$obs')";


    if(mysqli_query($conexao, $sql)){
        echo header('Location: Success1.php');
    }
    else{
        echo "Erro nao foi possivel cadastrar esse ordem verificar os dados ou tenta de novo".mysqli_connect_error();
    }
    mysqli_close($conexao);


   

?>