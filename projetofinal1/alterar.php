<?php
	include_once 'conexao.php';
	include_once 'editar.php';
	

	$idcad = $_GET['idcad'];

	$nome = isset($_POST['nome']) == true ?$_POST['nome']:"";
	$email = isset($_POST['email']) == true ?$_POST['email']:"";
	$senha = isset($_POST['senha']) == true ?$_POST['senha']:"";


	$alterar = $conn->query("update cadastro set nome='$nome', email='$email', senha='$senha' where idcad='$idcad'");

	 if (mysqli_affected_rows($conn) > 0) {
	 	
	 	header("location: mostrar.php");
	 }

?>