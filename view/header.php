<!DOCTYPE html>
<html ng-app="shop">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1">
		<title>My game</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css"><!-- Principal Framework Front End da atualidade-->
		<link rel="stylesheet" href="lib/owl.carousel/owl-carousel/owl.carousel.css"> <!--Owl Carousel é um plugin que permite a criação de um carrossel responsivo é usado mais em dispositivos móveis-->
		<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css"> <!-- Plugn para incluir icon em vez de img eles são responsiveis e adaptaveis e tem como personalizar-->
		<link rel="stylesheet" href="lib/raty/lib/jquery.raty.css"> <!-- jQuery é uma biblioteca de funções JavaScript que interage com o HTML-->
		<link rel="stylesheet" type="text/css" href="css/test.css">
		<script src="lib/angularjs/angular.min.js"></script><!-- angularjs é uma Framework onde atualiza as paginas em vez de recarregar novamente -->

<style>
.redtext {
	background-color: #5C2D90;
</style>

	</head>

	<body>
		<header>
			
			<div id="menu-mobile-mask" class="visible-xs"></div>			
			<div class="container"><img id="logotipo" src="img/Logo.png" alt="Logotipo"></div>
			<div class="header-black"></div>

			<div class="container">				
				<div class="row">					
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="videos">Videos</a></li>

							<li>
								<div class="dropdown" >
									<a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Shop</a>
										<div class="dropdown-menu redtext">
										  <a class="dropdown-item" href=shop>Home Shop</a>
										  <a class="dropdown-item" href="TodosProdutos">Todos Itens</a>
										  <a class="dropdown-item" href="http://localhost/final_correto_v7/view/Trabalho/index.php">Incluir item </a>
										</div>
								</div>
							</li>

							<li><a href="https://www.tecmundo.com.br/jogos"  target="_blank" >Notícias</a></li>
							<li><a href="http://localhost/final_correto_v7/view/Trabalho/cadastro.php">Cadastro</a></li>

							<li class="search">
								<div class="input-group">
							      <input type="search" placeholder="search" id="input-search">
							      <span class="input-group-btn">
							        <button type="button"><i class="fa fa-search"></i></button>
							      </span>
							    </div><!-- /input-group -->
							</li>


						</ul>
					</nav>
				</div>
			</div>		
		</header>
