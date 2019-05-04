<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>nosso site</title>
		<meta name="description" content="Responsive Multi-Level Menu: Space-saving drop-down menu with subtle effects" />
		<meta name="keywords" content="multi-level menu, mobile menu, responsive, space-saving, drop-down menu, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="images/favi.gif"> 
		<link rel="stylesheet" type="text/css" href="css/carr.css" />
		<link rel="stylesheet" type="text/css" href="css/carr1.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>

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


/* zoom sla*/


</style>



	</head>
	<body >
		<div style="margin: -10% 0% 0% 15%; position: absolute;">
			<img src="images/lg.png">


		</div>


		<div class="cont">
		           <fieldset>
          	<legend align="center"  style=" font-family: Century Gothic; color: red;">Coxinha da asa de frango ao forno</legend>
          	<div class="container1">
  <table>
  	<tr>
  		<td>
  			<img src="images/frango.jpg" style="border-radius: 30px;margin: 0% 0% 0% -25%">
    
        </td>
          		<td>
  			<img src="images/ct/fra.png" style="border-radius: 30px;margin: 0% 0% 0% -10%">
    
        </td>
        </td>

</tr>
<tr>
          		<td >
  			<div style="border-radius: 30px;margin: 0% 28% 0% -25%">Receita gentilmente cedida por Amorela..</div>
    
        </td>
    </tr>
    <tr>
    	
    	<td>
    		<h1>Ingredientes:</h1>
    	</td>
    </tr>
    <tr>
    	<td>
    		<ul>
    			





    	 <li>3 dentes de alho bem picados</li>
    	 <li>5  colheres de margarina</li>
    	 <li>2 colheres de salsinha ou coentro</li>
    	 
    	</ul>
    </td>
    <td>
    	<ul>
    	 <li>1 kg de coxinhas da asa de frango bem limpas</li>
    	 <li>1 copo de água</li>
    	 <li>Sal e pimenta do reino a gosto</li>
    	
    	</ul>
    </td>
    </tr>

   <tr>
    <td>
    		<h1>Modo de preparo:</h1>
    	</td>
    </tr>
    <tr>
    	<td>
        <ol>
        	---------------------------------------------------------------
        	<li>Fure as coxinhas de frango com a ponta de uma <br>faca e reserve.</li>
           ---------------------------------------------------------------
             <li>Prepare uma mistura com o alho, o sal, a pimenta,<br> a salsinha e a margarina. Passe a mistura nas <br>coxinhas e coloque em um refratário de vidro<br> ou de outro material que possa ir ao forno.<br> Cubra com papel alumínio e deixe descansar<br> por 1 hora.</li>
--------------------------------------------------------------
              <li>Leve ao forno por 1 hora. Retire do forno e <br>acrescente o copo de água. Leve ao forno novamente<br> e deixe cozinhar por 40 minutos. Depois, retire o papel <br>alumínio e deixe assar até dourar.</li>
              ---------------------------------------------------------------
        </ol>






    	</td>
    </tr>
  </table>




      

          </fieldset>
          <footer style="margin: 10% 0% -15% -25%; background-color: #3c3d3b; position: absolute; padding: 0% 90% 0% 80%;"><img src="images/ll.png"></footer>
          </div>


    
			<div class="tudo">
				
			
		<div class="container demo-4">	
		
			<div class="main clearfix">
				<div class="column">
					
				</div>
				<div class="column">
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="#">Home</a>
								<ul class="dl-submenu">
									<li><a href="index.php">retornar</a></li>
									
								</ul>
							</li>
							<li>
								<a href="#">Perfil</a>
								<ul class="dl-submenu">
									<li>
										<a href="#">usuário</a>
										<ul class="dl-submenu">
								              
											<li><a href="form_cadastro.php">cadastro</a></li>
											<li><a href="login.php">login</a></li>
											<li><a href="#">reserva</a></li>
											
										</ul>
									</li>
									
								</ul>
							</li>
							
							
									</li>
								</ul>
							</li>
						</ul>
					</div><!-- /dl-menuwrapper -->
				</div>
			</div>
		</div><!-- /container -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-3', classout : 'dl-animate-out-3' }
				});
			});
		</script>

		</div>
		

		
	
	</body>
</html>