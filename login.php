<!DOCTYPE html>
<html>
    
<!-- <div style="width:150px; margin:auto; heigh:500px;margin-top:300px:background-color: blue;
"> -->
<?php
 
 include'css/styles.css';

 session_start();
 if($data){
 
   
         $_SESSION['autenticados']=1;
 
 
         echo '<meta http-equiv="refresh" content="2;url=index.php">';
         echo '<progress max=100><strong>Progress:60%
                 done.</strong></progress><br>';
         echo '<span class= "itext"> please wait.......... !...</span>';
 
         header('Location: index.php');
         exit();
    
 }






?>

    <div>


    <link rel="stylesheet" href="styles.css">


    <div class="login" >

        <form 
          action="login.php" method="post" >
          <div class="caixa">
                <h1 >Bem vindo ao Mega Assistencia</h1>
                <p>Digite seu E-mail</p>
                <input type="text" name="email">
                <p>Digite sua senha</p>
                <input type="password" name="senha" > 
            </div>
    

            <div style="text-align: center;
                margin-top: 0.5rem;">
                    <button type="submit">Entrar</button> 
                    
                    
                </div>

                <div style="text-align: center;
                    margin-top: 0.5rem; "> 
                    <form>
                        <a href="login2.php">
                            <input type="button" value="Eu sou Administrador">

                        </a>
                                 
                     </form>
                </div>
            </form>
       
        

        </form>
    </div>
 </html>