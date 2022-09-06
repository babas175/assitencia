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
            padding: 100px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 15px;
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
    <form action="cadFunc.php" method= "POST">
    
    <div>
        <h1>Administrador</h1>
        <h1>Login</h1>
        <input type="text" placeholder="Id" name="id" required >
        <br><br>
        <input type="password" placeholder="Senha" name="senha" required>
        <br><br>
        
        <input type="submit" value="Entrar" name="update"/>
        <br>
        <br>
        <br>
        
        <a href="login.php">Eu sou funcionario</a>
        
    </div>
    </form>
</body>
</html>