<?php 
include_once 'conexao.php';
  $nomeC = isset($_POST['nome']) == true?$_POST['nome']: "" ;
  $senhaC = isset($_POST['senha']) == true?$_POST['senha']: "" ;
  $senhaR = isset($_POST['reSe']) == true?$_POST['reSe']: "" ;
  $emailC = isset($_POST['email']) == true?$_POST['email']: "" ;
  $telefoneC = isset($_POST['telefone']) == true?$_POST['telefone']: "" ;
  $nascimentoC = isset($_POST['nascimento']) == true?$_POST['nascimento']: "" ;
  $numeroCo = isset($_POST['nConta']) == true?$_POST['nConta']: "" ;
  $saldoCo = isset($_POST['sConta']) == true?$_POST['sConta']: "" ;
  
  	$sql =mysqli_query($conn,"INSERT INTO cliente(nomeCliente,senha,numeroConta,saldoConta,email,telefone,aniver)
   values('$nomeC','$senhaC','$numeroCo','$saldoCo','$emailC','$telefoneC','$nascimentoC')");
  
 
  

  

 
  


 ?>