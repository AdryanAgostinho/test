<?php 
  session_start();
 ?>


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
	<div class="panel-heading">Login</div>
	

	<form  action="processa.php" method="post" accept-charset="utf-8" class="form-group ">

		<table class="table table-condensed table-striped table-bordered table-hover">


	<tr>
		<td><label for="num">Email:</label>
		<td><input type="text" name="email" class="form-control">
	</tr>

	<tr>
		<td><label for="name">Senha:</label>
		<td><input type="password" name="senha" class="form-control">
	</tr>

		<br>

		<tr>
			<td colspan="2" align="center" ><input type="submit" name="btn" value="Login" class="btn btn-sucess btn-lg" style="background-color: green" ></td>
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