<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<style>

    *{
        margin: 0;
        padding: 0;
    }


    body {
      background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(../image1.jpg);
        
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

    input[type=submit] {
        background-color: #494950;/* #7fff00*/
        color: white;
        padding: 12px 20px;
        border: none;
         border-radius: 15px;
        cursor: pointer;
        float: center;
        text-align: center;
            
        position:absolute;
        top: 500px;
        left: 280px;
        margin-top: 60px; /* descer mais para baixo o botão submit */

    }

    input[type=submit]:hover {
        background-color:  black;

        }

    .container {
        width: 700px;
        height: 620px; /*580 */
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

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
        color: #fffffe;
        text-decoration: black;
    }

    .col-75 {
        float: left;
        width: 70%;
        margin-top: 10px;
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


    @media screen and (max-width: 300px) {
        .col-25, .col-75, input[type=submit] {
          width: 100;
          margin-top: 50;
          
        }
        }



</style>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ordem Servicos</title>
  </head>

  <body>

    
    

    <input type="checkbox" id="check">
    <!-- <label id="icone" for="check"><img src="assets/menu.png"></label> -->
    <label id="icone" for="check"><h2>Dashboard</h2></label>


    <div class="barra">
        <nav>
           <a href="DashbordFunc.php"><div class="link">Home</div></a>
            <a href="OrdemServico2.php"><div class="link">Ordem de Servicos</div></a>
            <a href=""><div class="link">Listar de Serviços</div></a>
            <a href="CadastraProd2.php"><div class="link">Cadastrar Produtos</div></a>
            <a href="Fechamento2.php"><div class="link">Fechamento caixa</div></a>
            <a href="sair2.php"><div class="link">Sair</div></a>
            
            
        </nav>

    </div>

    


<br>

<h1> MEGA CAPAS</h1>

<div class="container">
<a href="DashbordFunc.php"><button>  Voltar  </button></a>

  <br>
  <h2>Ordem de Serviços</h2>
  <br>
  <br>
  <br>
  

 
  <form action="OrdemServico3.php" method= "POST">
  <div class="row">
    <div class="col-25">
      <label for="nome">Nome</label>
    </div>
    <div class="col-75">
      <input type="text" id="nome" name="nome" placeholder=" Digite nome " required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="telefone">Telefone</label>
    </div>
    <div class="col-75">
      <input type="text" id="telefone" name="telefone" placeholder="(xx)xxxxxxxxx"required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="modelo">Modelo</label>
    </div>
    <div class="col-75">
      <input type="text" id="modelo" name="modelo" placeholder="Digite o modelo"required>
    </div>
  </div>
  
  

  <div class="row">
    <div class="col-25">
      <label for="defeito">Defeito</label>
    </div>
    <div class="col-75">
      <input type="text" id="defeito" name="defeito" placeholder="Digite o defeito"required>
    </div>
    
  </div>

  <div class="row">
    <div class="col-25">
      <label for="data">Data</label>
    </div>
    <div class="col-75">
      <input type="date" id="data" name="data1" placeholder="dd-mm-yyyy"required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="valor">Valor</label>
    </div>
    <div class="col-75">
      <input type="text" id="valor" name="valor" placeholder="valor"required>
    </div>
    
  </div>


  <div class="row">
    <div class="col-25">
      <label for="datadeentrega">Data de Entrega</label>
    </div>
    <div class="col-75">
      <input type="date" id="datadeentrega" name="data_entrega" placeholder="dd-mm-yyyy" required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="obs">Observação</label>
    </div>
    <div class="col-75">
      <textarea type="text" id="obs" name="obs" placeholder=""required></textarea>
    </div>
  </div>
  <br>
  <br>
  
  <br>
  <br>
  <div class="row">
    <input type="submit" value="Registra Ordem" name="registar"/>
  </div>
  </form>
</div>

</body>
</html>