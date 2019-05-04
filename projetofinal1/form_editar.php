
<!DOCTYPE html>
<html lang= "pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
	<div class="panel-heading">Alterar</div>
	
	<?php 
		include_once 'conexao.php';
		$idcad = $_GET['idcad'];

		$consultar = $conn->query("select * from cadastro where idcad = '$idcad'");

		while($dados = $consultar->fetch_assoc()){
			$idcad = $dados['idcad'];
		 	$nome = $dados['nome'];
		 	$email = $dados['email'];
		 	$senha= $dados['senha'];

		}

	 ?>

	<form  action="alterar.php?idcad=<?php echo $idcad; ?>" method="post" accept-charset="utf-8" class="form-group ">

		<table class="table table-condensed table-striped table-bordered table-hover">

		<tr >
			<td><label for="name">Nome:</label></td>
			<td><input type="text" value="<?php echo $nome; ?>" name="nome" class="form-control"></td>
		</tr>

	<tr>
		<td><label for="num">Email:</label>
		<td><input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
	</tr>

	<tr>
		<td><label for="name">Senha:</label> 
		<td><input type="text" name="senha" value="<?php echo $senha; ?>" class="form-control">
	</tr>

		<br>

		<tr>
			<td colspan="2" align="center" ><input type="submit" name="btn" value="Alterar" class="btn btn-sucess btn-lg" style="background-color: green" ></td>
		</tr>
		</table>


	</form>
</div>


	<footer>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

	</footer>

</body>
</html>