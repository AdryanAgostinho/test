<?php 
include_once 'funcao/conexao.php';
  $nomeC = isset($_POST['nome']) == true?$_POST['nome']: "" ;
  $senhaC = isset($_POST['senha']) == true?$_POST['senha']: "" ;
  $emailC = isset($_POST['email']) == true?$_POST['email']: "" ;
  $telefoneC = isset($_POST['telefone']) == true?$_POST['telefone']: "" ;
  $nascimentoC = isset($_POST['nascimento']) == true?$_POST['nascimento']: "" ;
  $numeroCo = isset($_POST['nConta']) == true?$_POST['nConta']: "" ;
  $saldoCo = isset($_POST['sConta']) == true?$_POST['sConta']: "" ;
 
  $sql ="INSERT INTO cliente(nomeCliente,senha,numeroConta,saldoConta,email,telefone,aniver)
   values('$nomeC','$senhaC','$numeroCo','$saldoCo','$emailC','$telefoneC','$nascimentoC')";
  if(mysqli_query($conn , $sql) == true){
    	header(
    	"location:index.php"
           
    	);
    }else{
    	

    }

  

 
  


 ?>