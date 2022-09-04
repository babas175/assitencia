<!DOCTYPE html>
<html>
    
<!-- <div style="width:150px; margin:auto; heigh:500px;margin-top:300px:background-color: blue;
"> -->
<?php
// session_start();
 
 include'css/styles.css';








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