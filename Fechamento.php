
<?php


?>


<style>

    *{
        margin: 0;
        padding: 0;
    }


    body {
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
        background-color : #494950;
        radius-border: 15px;
        color: white;
        
        

    }

    .container{
        background-color: #333;
        height: 100%;
        width: 300px;
        position: absolute;
        transition: all .2s linear;
        left:-100px;
        justify-content: center;    
        
       
           

    }

    /* css form */

   


.atualiza {


        background-color: #0000ff	;

        padding: 12px 20px;
        border: none;
         border-radius: 4px;
        cursor: pointer;
        float: center;
        text-align: center;
        
        position:absolute;
        position:absolute;
        top: 500px;
        left: 280px;
        
            
}



* {
box-sizing: border-box;
}
input[type=text], select, textarea {
    width: 70%;
    padding: 15px;
    border: 0.5px solid rgb(248, 250, 248);
    border-radius: 15px; 
    resize: vertical;
    }

 label {
    padding: 12px 12px 0;
    display: inline-block;
 }

    
    .container {
        width: 700px;
        height: 580px;
        background: #333;/*#adff2f*/
        position: absolute;
        top: 130px;
        left: 500px;
        transform: translate(0%,-5%);
        border-radius: 15px;
        padding: 25px;
        float:left;
        justify-content: center;    
            
            
    }

    .container a{
        /* position:absolute;
        top: 500px;
        left: 280px; 
        height: 580px; */
        
        float: right;
        font-weight: bold;
        color: #000000;
        text-decoration:none;
        justify-content: center;  
    }

    .entrada{
        display:inline-block;
    }
    
    
    h2{
      color: white;
      text-align:center
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
   
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
            <a href="">listar_funcionario.php<div class="link">Listar Funcionarios</div></a>
            <a href="OrdemServico.php"><div class="link">Ordem de Servicos</div></a>
            <a href=""><div class="link">Listar de Serviços</div></a>
            <a href=""><div class="link">Cadastrar Produtos</div></a>

            <a href=""><div class="link">Fechamento caixa</div></a>
            <a href="sair.php"><div class="link">Sair</div></a>

            <a href="Fechamento.php"><div class="link">Fechamento caixa</div></a>

            
            
        </nav>

    </div>

    


<br>

<h1> MEGA CAPAS</h1>

<div class="container">
  <a href="DashbordAdm.php"><button>Voltar</button></a>
  <br>
  <h2>Fechamento Caixa</h2>
  <br>
  <br>
  <br>
  

 
  <form action="Fechamento.php" method= "POST">
 

  
  
  </form>
</div>

</body>
</html>