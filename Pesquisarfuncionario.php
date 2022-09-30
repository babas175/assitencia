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
			<input type="text" name="nome" placeholder="Digite o nome do funcionario"><br><br>
			
			<input name="SendPesqUser" type="submit" value="Pesquisar nome">
		</form><br><br>
		
		<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM cadastrofunc WHERE nome LIKE '%$nome%'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				echo "Cpf: " . $row_usuario['cpf'] . "<br>";
				echo "Nome: " . $row_usuario['nome'] . "<br>";
				echo "E-mail: " . $row_usuario['email'] . "<br>";
                echo "Telefone: " . $row_usuario['telefone'] . "<br>";
                echo "data de cadastro: " . $row_usuario['data_de_cadastro'] . "<br>";
				
			}
		}
		?>
	</body>
</html>