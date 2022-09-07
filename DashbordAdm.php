<?php




?>

<!-- css -->
<style>

    *{
        margin: 0;
        padding: 0;
    }


    body {
        background-image: url(assets/fundo.jpeg);

        /*background-color: #f9f9f9;*/
        
    }


    #check{
        display: none;
    }

    #icone{
        cursor: pointer;
        padding: 15px;
        position: absolute;
        z-index: 1;

    }

    .barra{
        background-color: #333;
        height: 100%;
        width: 300px;
        position: absolute;
        transition: all .2s linear;
        left:-300px;
        
    }

    nav{
        width: 100%;
        position: absolute;
        top: 60px;
    }

    nav a{
        text-decoration: none;
    }

    .link{
        background-color: #494950;
        padding: 20px;
        font-family: 'Arial';
        font-size: 12pt;
        transition: all .2s linear;
        color: #f4f4f9;
        border-bottom: 2px solid #222;
        opacity: 0;
        margin-top: 200px;
    }

    .link:hover{
        background-color: #050542;
    }

    .barra{
        transform: translateX(300px);
    }
    .barra nav a .link{
        opacity: 1;
        margin-top:0;
        transition-delay: .2s;
    }
    h1{
        text-align:center;
        

    }
    h2{
        color: white;
    }

    .container{
        background-color: #333;
        height: 100%;
        width: 300px;
        position: absolute;
        transition: all .2s linear;
        left:-300px;

    }

</style>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Dashbord Adm</title>
  </head>

  <body>

  <!-- <h1> MEGA CAPAS</h1> -->
    
    

    <input type="checkbox" id="check">
    <!-- <label id="icone" for="check"><img src="assets/menu.png"></label> -->
    <label id="icone" for="check"><h2>Dashbord</h2></label>


    <div class="barra">
        <nav>
            <a href=""><div class="link">Home</div></a>
            <a href="CadastraFunc.php"><div class="link">Cadastrar Funcionario</div></a>
            <a href="listar_funcionario.php"><div class="link">Listar Funcionarios</div></a>
            <a href="OrdemServico.php"><div class="link">Ordem de Servicos</div></a>
            <a href=""><div class="link">Listar de Serviços</div></a>
            <a href="CadastraProd.php"><div class="link">Cadastrar Produtos</div></a>
            <a href="Fechamento.php"><div class="link">Fechamento caixa</div></a>
            <a href="sair.php"><div class="link">Sair</div></a>
            

        </nav>

    </div>

    


  </body>
</html>