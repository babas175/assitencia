<?php



require_once 'conexao.php';
session_start();



if(isset($_POST['entrar'])):
    $erros = array();
    $cpf = mysqli_escape_string($conexao, $_POST['cpf']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);

    if(empty($cpf) or empty($senha)):
        $erros[] = "<li> O campo cpf / senha precisa ser preenchido <li>";
    else:
        $sql ="SELECT cpf FROM cadastrofunc WHERE cpf ='$cpf'";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0):
        $sql= "SELECT * FROM cadastrofunc WHERE cpf ='$cpf' AND senha='$senha' ";
        $resultado = mysqli_query($conexao, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    $_SESSION['logado']= true;
                    $_SESSION['id_usuario'] = $dados['cpf'];
                    header('Location: funcionario/DashbordAdm.php');
               
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