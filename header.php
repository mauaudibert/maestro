<html>
<head>
<title>Maestro</title>
<link rel="stylesheet" href="./css/bootstrap.css" />
<link rel="stylesheet" href="./css/estilo.css" />
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>

<script src="./js/bootstrap.js">
</script>

</head>


<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-4" id="logo">
					<img src="./Img/maestro.png" alt="Logo do Sistema" />
				</div>

				<div class="col-lg-8" id="menu">
					<ul class="nav nav-pills pull-right">
						<li role="presentation"
							class="<?=( isset($_GET['pagina']) && $_GET['pagina']=='dashboard')?'active':''; ?>">
							<a href="index.php?pagina=dashboard">Dashboard</a>
						</li>
						<li role="presentation"
							class="<?=(isset($_GET['pagina']) && $_GET['pagina']=='aluno')?'active':''; ?>"><a
							href="index.php?pagina=aluno&formulario=0">Alunos</a></li>

						<li role="presentation"
							class="<?=(isset($_GET['pagina']) && $_GET['pagina']=='professores')?'active':''; ?>"><a
							href="index.php?pagina=professor&formulario=0">Professores</a></li>
						<li role="presentation"
							class="<?=(isset($_GET['pagina']) && $_GET['pagina']=='coordenador')?'active':''; ?>"><a
							href="index.php?pagina=coordenador&formulario=0">Coordenador</a></li>

						<li role="presentation"
							class="<?=(isset($_GET['pagina']) && $_GET['pagina']=='sair')?'active':''; ?>"><a
							href="index.php?pagina=sair">Sair</a></li>

<li role="presentation"
							class="<?=(isset($_GET['pagina']) && $_GET['pagina']=='usuarios')?'active':''; ?>"><a
							href="index.php?pagina=usuarios">Usuarios</a></li>
					</ul>

				</div>
			</div>
		</div>

	</header>
	<div id="content">
		<div class="container">
			