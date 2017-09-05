<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<!-- Declaração metas -->
		<meta name="author" content="Daniel Dias">
		<meta name="description" content="Plataforma de negociação de mercadorias online">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Negociação de Mercadorias</title>

		<!-- Declaração estilo -->
		<link rel="stylesheet" type="text/css" href="css/estilo.css"> <!-- CSS Estilo próprio -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!-- CSS BootStrap 4 -->
	</head>
	<body>
		<div class="nav-side-menu"><!-- Inicio do conteudo NAV -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark"><!-- Inicio NavBar responsivel -->
				<h1 class="navbar-brand">Negociação de Mercadorias</h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
								
				<div class="collapse navbar-collapse" id="navbar">
				    <div class="hide-lg">
					    <ul class="navbar-nav mr-auto">
					      <li class="nav-item active">
					        <a class="nav-link <?php echo $activeHome; ?>" href="index.php">Home <span class="sr-only">(current)</span></a>
					      </li>
					      <li class="nav-item active">
					        <a class="nav-link <?php echo $activeOper; ?>" href="operacoes.php">Lista de Operações <span class="sr-only">(current)</span></a>
					      </li>
					    </ul>
				    </div>
				</div>
			</nav><!-- Fim NavBar responsivo -->
			<div class="hide-sm"><!-- Inicio SideBar Desktop -->
				<nav>
					<ul class="navbar-nav">
				      	<li>
				      	  <a class="btn btn-dark btn-lg btn-side btn-block <?php echo $activeHome; ?>" href="index.php">Home</a>
				     	 </li>
				      	<li>
				      	  <a class="btn btn-dark btn-lg btn-side btn-block <?php echo $activeOper; ?>" href="operacoes.php">Lista de Operações</a>
				     	</li>
				    </ul>
				  </nav>
		    </div><!-- Fim SideBar Desktop -->
		</div><!-- Fim do conteudo NAV -->