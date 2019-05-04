<?php 
  
  session_start();


  include_once 'conexao.php';
  

if (empty($_POST['email']) ||  empty($_POST['senha'])) {

    header('location: login.php');
    exit();


}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);


$query = $conn->query("select email, senha from usuarios where email = '{$email}' and senha = md5('{$senha}')");
$row = mysqli_num_rows($query);



if ($row == 1) {
	
	$_SESSION['usuario'] = $email;
	header('location: home2.php');
	exit();


}else{

	$_SESSION['nao_autenticado'] = true;
	header('location: login.php');
	exit();
}


 ?>


