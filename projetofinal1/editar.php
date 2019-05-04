<meta charset="utf-8">
	
	<?php 

	include_once 'conexao.php';


	$idcad = $_GET['idcad'];

 		$cons = $conn->query("select * from cadastro where idcad ='$idcad'");

		while($dados= $cons->fetch_assoc()){


		 $idcad = $dados['idcad'];
		 $nome = $dados['nome'];
		 $email = $dados['email'];
		 $senha= $dados['senha'];

}
	

	?>

	<form  action="alterar.php?id=<?php echo $id;?>" method="post" accept-charset="utf-8" class="form-group ">

		<table class="table table-condensed table-striped table-bordered table-hover">

		<tr >
			<td><label for="name">Nome:</label></td>
			<td><input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>"></td>
		</tr>

	<tr>
		<td><label for="num">Email:</label>
		<td><input type="text" name="num" class="form-control" value="<?php echo $email; ?>">
	</tr>

	<tr>
		<td><label for="name">Senha:</label>
		<td><input type="text" name="cargo" class="form-control" value="<?php echo $senha; ?>">
	</tr>

		<br>

		<tr>
			<td colspan="2" align="center"><input type="submit" name="btn" value="Alterar" class="btn btn-sucess btn-lg" style="background-color: green" ></td>
		</tr>
		</table>


	</form>