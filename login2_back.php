<?php

require_once 'conexao.php';
session_start();

if(isset($_POST['entrar'])):
    $erros = array();
    $id = mysqli_escape_string($conexao, $_POST['id']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);

    if(empty($id) or empty($senha)):
        $erros[] = "<li> O campo id/ senha precisa ser preenchido <li>";
    else:
        $sql ="SELECT id FROM adm WHERE id ='$id'";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0):
        $sql= "SELECT * FROM adm WHERE id ='$id' AND senha='$senha' ";
        $resultado = mysqli_query($conexao, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    $_SESSION['logado']= true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: DashbordAdm.php');
               
                else:
                    $erros[] ="<li> Usuario e senha NAO CONFERE </li>";
                endif;

        else:
            $erros[] ="<li> Usuario inexistente </li>";
        endif;

    endif;

endif;



if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
endif;

?>