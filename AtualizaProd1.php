<?php

  include("conexao.php");

  if (isset($_POST['update']))
  {
    $id = $_POST['id'];

    $query = "UPDATE `produtos` SET idP='$_POST[id]', nome='$_POST[nome]', valor='$_POST[valor]' ";
    $query_run= mysqli_query($conexao, $query);

  if ($query_run)
  {
    echo header('Location: Success.php');
  }
  else
  {
    echo 'error de conexao';
  }

  }


?>