<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projeto 01</title>
    <meta charset="UTF-8">
    
    <!--META Responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <!--META TAGS PARA SEO -->
    <meta name="keywords" content="palavras,chaves,do,meu,site">
    <meta name="desciption" content="Descrição do meu site">

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	<link rel="stylesheet" type="text/css" href="estilo/fontawesome/css/all.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

</head>
<body>

	<header>
		<div class="center">
			<div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
			<!-- Menu para desktop -->
            <nav class="desktop right">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="depoimentos">Depoimentos</a></li>
					<li><a href="servicos">Serviços</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
			</nav>
            <!-- Menu para dispositivos mobile-->
			 <nav class="mobile right">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Depoimentos</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="banner-principal">
		<div class="center">
			<form>
				<h2>Qual o seu melhor email?</h2>
				<input type="email" name="email">
				<input type="submit" name="acao" value="Cadastrar">
			</form>
		</div>
	</section>

	<section class="descricao-autor">
		<div class="center">
			<div class="w50 left">
				<h2>Adriano Junior Vidal</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="w50 left">
				<img src="images/adrianojrv.jpg">
			</div>
			<div class="clear"></div>
		</div>	
	</section>

	<section class="especialidades">
		<h2 class="title center">Especialidades</h2>
		<div class="center">
			<div class="box-especialidade w33 left">
				<h3><i class="fa-brands fa-css3-alt"></i></h3>
				<h4>CSS3</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->

			<div class="box-especialidade w33 left">
				<h3><i class="fa-brands fa-html5"></i></h3>
				<h4>HTML 5</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->

			<div class="box-especialidade w33 left">
				<h3><i class="fa-brands fa-js"></i></h3>
				<h4>Javascript</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->
		</div>
	</section>

	<section class="extras">
		<div class="center">
			<div class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				
				<div class="depoimento-single">
					<p class="depoimento-descricao">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p class="nome-autor">Lorem ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50-->

			<div id="servicos" class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
					</ul>
				</div><!--servicos-->
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--extras-->

	<footer>
		<div class="center">
			<p>Todos os direitos reservados!</p>
		</div>
	</footer>

</body>
</html>