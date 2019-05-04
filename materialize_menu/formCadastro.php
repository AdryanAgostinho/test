<?php
include_once 'cadastrar.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title> materialize</title>
  
	<meta charset="utf-8">
	<!--   materialize css  -->
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
  <style type="text/css">
     .row a:hover{
      background-color: #dbe0f7;
      padding: 10px;
      border-radius: 4px;
      text-shadow: 10%;

    }

  </style>
<script>
                function validarSe(){
                   var NovaSenha = Form.senha.value;
                    var cNovaSenha = Form.reSe.value;

                    if (NovaSenha != CNovaSenha) 
                        alert("SENHAS DIFERENTES!\\nFAVOR DIGITAR SENHAS IGUAIS");
                    }
            </script>
</head>
<body>
	<div class="card-panel blue "> 
    <div class="row">
      <div class=" col s-1 white-text">
                 <a href="index.php" style="text-decoration: none; color: white;">Bem vindo</a> 
          </div>

      
  <div class="col s-2">
    <a href="formCadastro.php" style="text-decoration: none; color: white;">Cadastrar</a>
  </div>  
  <div class="col s-3">
    <a href="mostra.php" style="text-decoration: none; color: white;">Mostrar</a>
  </div>  
  <div class="col s-4">
    <a href="excluir.php" style="text-decoration: none; color: white;">Excluir</a>
  </div>  
  </div>
  </div>
	<form action="cadastrar.php" method="post" name="form">
<!-- ------------------------------------------------------------------------->
<div class="row">
    <div class="input-field col s12">
      <input placeholder="Paula  da silva" id="first_name2" type="text" class="validate" name="nome">
      <label class="active" >nome completo</label>
    </div>

  </div>
  <!-- ------------------------------------------------------------------------->
  <div class="row">
    <div class="input-field col s6">
      <input placeholder="master450" id="password "  type="password" class="validate" name="senha">
      <label class="active" >senha</label>
    </div>
    <div class="input-field col s6">
      <input placeholder="master450"  id="password " name="reSe" type="password" class="validate"> 

      <label class="active " >repita a senha</label>
    </div>
  </div>
  <!-- ------------------------------------------------------------------------->
<div class="row">
    <div class="input-field col s12">
      <input placeholder="AdryanAgostinho@hotmail.com" id="first_name2" type="text" class="validate" name="email">
      <label class="active" >digite seu email</label>
    </div>
  </div>
  <!-- ------------------------------------------------------------------------->
  <div class="row">
    <div class="input-field col s6">
      <input placeholder="4002-8922" id="first_name2" type="text" class="validate" name="telefone">
      <label class="active" >digite seu número de telefone</label>
    </div>
    <div class="input-field col s6">
      <input placeholder="28/06/2002" id="first_name2" type="text" class="validate" name="nascimento">
      <label class="active" >data de nascimento</label>
    </div>
  </div>
  <!-- ------------------------------------------------------------------------->
  <div class="row">
    <div class="input-field col s6">
      <input placeholder="4002-8922" id="first_name2" type="text" class="validate" name="nConta">
      <label class="active" >número da conta</label>
    </div>
    <div class="input-field col s6">
      <input placeholder="4002-8922" id="first_name2" type="text" class="validate" name="sConta">
      <label class="active" >saldo da conta</label>
    </div>
  </div>
  <!-- ------------------------------------------------------------------------->
  <div class="row" >
  	<div class="col 12">
  		<input type="submit" class="waves-effect waves-light btn" onclick="return validarSe()">
  	</div>
  	
  </div>
</form>


        
<!--    jquery -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!--    materialize  js -->
<script src="materialize.js"></script>
</body>
</html>