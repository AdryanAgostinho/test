<?php

	$conn = mysqli_connect("localhost","root","master450","reservaas");
	$conn->set_charset('utf8');


	if ($conn) {
		 echo "Conexão realizada com sucesso";
			
		
	} else{
		
		die("Falha na conexão: " . mysqli_connect_error());
	}



?>