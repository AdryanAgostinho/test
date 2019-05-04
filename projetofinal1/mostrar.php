<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
<meta charset="utf-8">
<h5 class="light">Consultas</h5><hr class="formulario">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


  <style type="text/css">/* General Demo Style */
@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);

@font-face {
	font-family: 'fontawesome';
	src:url('../fonts/fontawesome.eot');
	src:url('../fonts/fontawesome.eot?#iefix') format('embedded-opentype'),
		url('../fonts/fontawesome.svg#fontawesome') format('svg'),
		url('../fonts/fontawesome.woff') format('woff'),
		url('../fonts/fontawesome.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

.tudo { font-size: 90%; 	padding: 0; margin: -20% -10% 0% 80%; position: absolute; }

/* Reset */
*,
*:after,
*:before {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

/* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
.clearfix:before,
.clearfix:after {
	content: " ";
	display: table;
}

.clearfix:after {
	clear: both;
}
legend{
	font-size: 50px;
}


body {
	font-family: 'Lato', Calibri, Arial, sans-serif;
	color: #6f6f6f;
	background: #fffcf5;
	min-height: 800px;
    overflow-x: hidden; 
}

a {
	color: #ccc;
	text-decoration: none;
}

a:hover {
	color: #fff;
}

.main,
.container > header {
	width: 100%;
	margin: 0 auto;
	padding: 0 1.875em 3.125em 1.875em;
}

.cont{
	position: absolute;
	margin: 13% 25% 0% 10%;
	padding: 0% 0% 10% 0%;
}

/* aqui vai ficar as parada */
.main {
	max-width: 69em;
	padding-top: 2em;
}

.column {
	float: left;
	width: 50%;
	padding: 0 2em;
	min-height: 300px;
	min-width: 320px;
	position: relative;
}

.column:nth-child(2) {
	min-height: 400px;
	box-shadow: -1px 0 0 rgba(0,0,0,0.1);
}

.column:last-child:before {
	content: '';
	position: absolute;
	height: 7px;
	background: #ceccc6;
	top: 100px;
	left: 10px;
}

.column p {
	font-weight: 300;
	font-size: 2em;
	padding: 0;
	margin: 0;
	text-align: right;
	line-height: 1.5;
}

.container > header {
	padding: 2.875em 1.875em 2.875em;
	text-align: center;
	background: rgba(0,0,0,0.01);
}

.container > header h1 {
	font-size: 2.625em;
	line-height: 1.3;
	margin: 0;
	color: #89867e;
	font-weight: 300;
}

.container > header span {
	display: block;
	font-size: 60%;
	color: #ceccc6;
	padding: 0 0 0.6em 0.1em;
}

/* Header Style */
.codrops-top {
	background: #fff;
	background: rgba(255, 255, 255, 0.95);
	text-transform: uppercase;
	position: relative;
	font-size: 0.68em;
	box-shadow: 1px 0px 2px rgba(0,0,0,0.2);
	line-height: 2.2;
}

.codrops-top a {
	padding: 0 1em;
	letter-spacing: 0.1em;
	color: #333;
	display: inline-block;
}

.codrops-top a:hover {
	background: rgba(255,255,255,0.99);
	color: #000;
}

.codrops-top span.right {
	float: right;
}

.codrops-top span.right a {
	float: left;
	display: block;
}

/* Demo Buttons Style */
.codrops-demos {
	padding-top: 1em;
	font-size: 0.9em;
}

.codrops-demos a {
	display: inline-block;
	margin: 0.5em;
	padding: 0.7em 1.1em;
	border: 3px solid #b1aea6;
	color: #b1aea6;
	font-weight: 700;
}

.codrops-demos a:hover,
.codrops-demos a.current-demo,
.codrops-demos a.current-demo:hover {
	border-color: #89867e;
	color: #89867e;
}

@media screen and (max-width: 46.0625em) {

	.main {
		padding: 0;
	}

	.column {
		width: 100%;
		min-width: auto;
		min-height: auto;
		padding: 3em 2em; 
	}

	.column p {
		text-align: left;
		font-size: 1.5em;
	}

	.column:nth-child(2) {
		box-shadow: 0 -1px 0 rgba(0,0,0,0.1);
		background-position: 90px 3em;
	}

</style>
</head>
<body>
	<div class="container">
<table class="table table-triped table-hover">  

	<thead>
		
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
		
	</thead>

	<tbody>
		
		<?php include_once'consulta.php' ?>

	</tbody>


</table>

<a href="form_cadastro.php"><button>Voltar para o formulário</button></a>
</div>
<script type="text/javascript" src=""></script>

</body>
</html>
