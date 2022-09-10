<?php

  include("conexao.php");

  if (isset($_POST['delete']))
  {
    $cpf = $_POST['cpf'];
    $query = "DELETE FROM `cadastrofunc`  where cpf='$_POST[cpf]' ";
    $query_run= mysqli_query($conexao, $query);

  if ($query_run)
  {
    echo header('Location: DashbordAdm.php');
  }
  else
  {
    echo 'error de conexao';
  }

  }


?>