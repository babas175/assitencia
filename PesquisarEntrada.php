<?php
include_once "conexao2.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Pesquisar</title>		
	</head>
	<body>
    <a href="DashbordAdm.php"><div class="link2">Voltar</div></a>
		<br>
        <br>
		<br>
        
		
		<h1>Pesquisar funcionario</h1>
		
		<form method="POST" action="">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite a data "><br><br>
			
			<input name="SendPesqUser" type="submit" value="Pesquisar nome">
		</form><br><br>
		
		<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$data1 = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM fechamento WHERE data1 LIKE '%$data1%'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				echo "Data: " . $row_usuario['data1'] . "<br>";
				echo "Opçao: " . $row_usuario['opcao'] . "<br>";
				echo "Valor: " . $row_usuario['valor'] . "<br>";
                echo "Observaçao: " . $row_usuario['obs'] . "<br>";
                echo "<br> " ;
                echo "<br> " ;
             
			}
		}
		?>
	</body>
</html>