
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
  <?php
include_once 'funcao/mostrar.php';


?>



        
<!--    jquery -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!--    materialize  js -->
<script src="materialize.js"></script>
</body>
</html>