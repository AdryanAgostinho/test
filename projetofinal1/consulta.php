<?php 


include_once 'conexao.php';


$cons = $conn->query("select * from cadastro");

while($dados= $cons->fetch_assoc()){

		 $idcad = $dados['idcad'];
		 $nome = $dados['nome'];
		 $email = $dados['email'];
		 $senha= $dados['senha'];



		 echo "<tr>";
		 	echo "<td>$idcad<td>$nome<td>$email";

		 	echo "<td> <a class='btn btn-success btn-lg' href='form_editar.php?idcad=$idcad'> Editar</a>";
		 	echo "<td> <a class='btn btn-danger btn-lg' href='delete.php?idcad=$idcad'> Excluir</a>";
		
}












 ?>