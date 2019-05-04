<?php 
	include_once 'conexao.php';
	

	$nome = isset($_POST['nome']) == true ?$_POST['nome']:"";
	$email = isset($_POST['email']) == true ?$_POST['email']:"";
	$senha = isset($_POST['senha']) == true ?$_POST['senha']:"";

	//inserir dados

	$sql = "INSERT INTO cadastro(nome, email, senha) VALUES ('$nome', '$email', '$senha')";


		if ($conn->query($sql) == true) {
			header('location: index.php');

			
		} else{

			echo "Error: ". $sql . "<br>" . $conn->error;

		}
		$conn->close();






?>