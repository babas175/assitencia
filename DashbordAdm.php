<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</html>

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
    <label id="icone" for="check"><h2>Dashboard</h2></label>


    <div class="barra">
        <nav>
            <a href="DashbordAdm.php"><div class="link">Home</div></a>
            <a href="CadastraFunc.php"><div class="link">Cadastrar Funcionario</div></a>
            <a href="listar_funcionario.php"><div class="link">Listar Funcionarios</div></a>
            <a href="OrdemServico.php"><div class="link">Ordem de Servicos</div></a>
            <a href="listar_ordem.php"><div class="link">Listar ordem de Serviços</div></a>
            <a href="CadastraProd.php"><div class="link">Cadastrar Produtos</div></a>
            <a href="Fechamento.php"><div class="link">Fechamento caixa</div></a>
            <a href="listar_movimentacao.php"><div class="link">Entrada e Saida</div></a>
            <a href="Relatorio.php"><div class="link">Relatório</div></a>
<<<<<<< HEAD
            <a href="buscar.php"><div class="link">Pesquisar</div></a>
=======

>>>>>>> 3170d75e5f7b056e5c101a8b0682f97f0daf2760
            <a href="deleteFunc.php"><div class="link">Delete Funcionario</div></a>
            <a href="AtualizaProd.php"><div class="link">Atualizar Produtos</div></a>
            <a href="DeleteProd.php"><div class="link">Delete Produtos</div></a>
            <a href="sair.php"><div class="link">Sair</div></a>
            

        </nav>

    </div>

    


  </body>
</html>