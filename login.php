
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
            background-image: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(assets/fundo.jpeg);
        }
        a{
            color:white;
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

<div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Mega</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="login.php">Login</a></li>
                    
                </ul>
            </div>
    <form action="login_back.php" method= "POST">
    <div>
       
        <h1>Funcionario</h1>
        <h1>Login</h1>
        <input type="text" placeholder="cpf" name="cpf" required >
        <br><br>
        <input type="password" placeholder="Senha" name="senha" required>
        <br><br>
        <button type="submit" name ="entrar" >Entrar</button>
        <br>
        <br>
        <br>
        <a href="login2.php">Eu sou administrador</a>
    </div>
    </form>
    
    </div>
</body>
</html>