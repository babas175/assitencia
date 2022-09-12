<?php
	include_once("conexao2.php");
	$result_cursos = "SELECT * FROM cadastrofunc";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Modal</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
    
<style>
	body{
	background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(image1.jpg);
	}

	h1,td,th{
		color: white;
	}

</style>
	<body>
        

		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Funcionarios Cadastrados </h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
							
								<th>Cpf</th>
                                <th>nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Senha</th>
								<th>Data de Cadastro</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
								<tr>
									
									<td><?php echo $rows_cursos['cpf']; ?></td>
                                    <td><?php echo $rows_cursos['nome']; ?></td>
                                    <td><?php echo $rows_cursos['email']; ?></td>
                                    <td><?php echo $rows_cursos['telefone']; ?></td>
                                    <td><?php echo $rows_cursos['senha']; ?></td>
									<td><?php echo $rows_cursos['data_de_cadastro']; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>		
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>

  
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</style>
<body>

</body>
</html>