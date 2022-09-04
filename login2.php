<<<<<<< HEAD
=======

    
<?php
session_start();
 
include'css/styles.css';
include'db.php';


session_start();
if(@$_POST['email']=='megas' &&
    @$_POST['senha']=='0000'){
        $_SESSION['autenticados']=1;
        header('Location: index.php');
        exit();
    }




?>

>>>>>>> 08b76a7e2e299d3ddd2959bb275cdb3a7ae627b5
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(assets/fundo.jpeg);
        }
        a{
            color:white;
            text-align: center;
        }
        h1{
            text-align: center;
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>

    
    <div>
        <h1>Administrador</h1>
        <h1>Login</h1>
        <input type="text" placeholder="Nome" >
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <button>Entrar</button>
        <br>
        <br>
        <br>
        <a href="login.php">eu sou funcionario</a>
        
    </div>
</body>
</html>