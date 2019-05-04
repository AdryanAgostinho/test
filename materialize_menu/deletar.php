<?php 
include_once 'funcao/conexao.php';
$nSenha = isset($_POST['senha'])== true ?$_POST['senha']:"";
  $sql ="DELETE FROM cliente WHERE senha='$nSenha' ";
    if(mysqli_query($conn , $sql) == true){
    	header(
    	"location:index.php"
           
    	);
    }else{
    	die(mysql_error("não apagou"));

    }

   
    ?>

   