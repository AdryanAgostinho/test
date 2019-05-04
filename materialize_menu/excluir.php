<?php 
  
    include_once 'funcao/conexao.php';
    $query = "SELECT * FROM cliente  ";
    if ($result = $conn->query($query)) {

    $row = $result->fetch_assoc();
    
      $nom = $row['nomeCliente']; 
       $numC =  $row['numeroConta'];
     }?>


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
</head>
<body>
	<div class="card-panel blue "> 
		<div class="row" >
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
<form  method="post">

   
<!-- ------------------------------------------------------------------------->
<div class="row">
    <div class="input-field col s12">
      <input placeholder="2233" id="first_name2" type="text" class="validate" name="nome">
      <label class="active" >Número da conta que você quer apagar</label>
    </div>
    <!-- ------------------------------------------------------------------------->
    <div>
     <?php  
     include_once 'funcao/conexao.php';
     $nombre = isset($_POST['nome']) ==true?$_POST['nome']:"";
    
    $query = "SELECT * FROM cliente where numeroConta ='$nombre' ";
    if ($result = $conn->query($query)) {

    while ($row = $result->fetch_assoc()) { ?>
    <div class="row">
      <div class="input-field col s12">
      <input placeholder="2233" id="first_name2" disabled type="text" class="validate" value="
         <?php echo $row['nomeCliente']; ?>
      ">
      <label class="active "  >Nome da conta</label>
    </div>
      
      </div>
      <div class="row">
      <div class="input-field col s12">
      <input placeholder="2233" id="first_name2" disabled type="text" class="validate" value="
       <?php echo  $row['numeroConta'];?>
      ">
      <label class="active" >Número da conta</label>
    </div>
      
      </div>
      <div class="row">
      <div class="input-field col s12">
      <input placeholder="2233" id="first_name2" disabled type="text" class="validate" value="
       <?php echo $row['saldoConta'];?>
      ">
      <label class="active" >Saldo Da Conta</label>
    </div>
      </div>
       </div>
      <div class="row">
      <div class="input-field col s12">
      <input placeholder="2233" id="first_name2" disabled type="text" class="validate" value="
      <?php echo $row['email'];?>
      ">
      <label class="active" >E-mail</label>
    </div>
      </div>
      <?php } } ?>
      </div>

    <!-- ------------------------------------------------------------------------->

    
    <div class="row" >
  	<div class="col 12">
  		<input type="submit" class="waves-effect waves-light btn" name="">
  	</div>
  </div>
  
</form>
<form action="deletar.php" method="post">
   <div class="row">
      <div class="input-field col s12">
      <input placeholder="2233" id="first_name2" type="password" class="validate" name="senha">
      <label class="active" >Digite sua Senha</label>
    </div>
      
    <div class="col 12">
      <input type="submit" class="waves-effect waves-light btn" name="" value="deletar">
    </div>
  </div>
    
  </form>



	
<!--    jquery -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!--    materialize  js -->
<script src="materialize.js"></script>
</body>
</html>