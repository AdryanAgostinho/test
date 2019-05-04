<?php 

	include_once 'conexao.php';

	$idcad = $_GET['idcad'];

	$deletar = $conn->query("delete from cadastro where idcad ='$idcad'");

	 if (mysqli_affected_rows($conn) > 0) {
	 	
	 	header("location: mostrar.php");
	 }

 ?>