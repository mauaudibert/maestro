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
							class="<?=( isset($_GET['menu']) && $_GET['menu']=='dashboard')?'active':''; ?>"><a
							href="aluno_lista.php?menu=dashboard">Dashboard</a></li>
						<li role="presentation"
							class="<?=(isset($_GET['menu']) && $_GET['menu']=='aluno')?'active':''; ?>"><a
							href="aluno_lista.php?menu=aluno">Alunos</a></li>

						<li role="presentation"
							class="<?=(isset($_GET['menu']) && $_GET['menu']=='professores')?'active':''; ?>"><a
							href="aluno_lista.php?menu=professores">Professores</a></li>
						<li role="presentation"
							class="<?=(isset($_GET['menu']) && $_GET['menu']=='cordenadores')?'active':''; ?>"><a
							href="aluno_lista.php?menu=cordenadores">Cordenadores</a></li>

						<li role="presentation"
							class="<?=(isset($_GET['menu']) && $_GET['menu']=='sai')?'active':''; ?>"><a
							href="aluno_lista.php?menu=sai">Sair</a></li>

					</ul>

				</div>
			</div>
		</div>

	</header>
	<div id="content">
		<div class="container">

		<?php
		if (isset ( $_GET ['menu'] ) && $_GET ['menu'] == 'aluno') {
			?>
			<div class="row">
				<h1>Dashboard</h1>
				<ol class="breadcrumb">
					<li><a href="#">Maestro</a></li>
					<li>Aluno</li>
				</ol>

			</div>

			
			<?php if (isset ( $_GET ['formulario'] ) && $_GET ['formulario'] == 0) { ?>
				<div class="row">
				<a href="aluno_lista.php?menu=aluno&formulario=1"
					class="btn btn-default">Adicionar</a>
				<table class="table">
					<tr>
						<td><b>ID</b></td>
						<td><b>Nome</b></td>
						<td><b>E-mail</b></td>
					</tr>
					<tr>
						<td>001</td>
						<td>Smith</td>
						<td>smith@outlook</td>
						<td><a href="" class="btn btn-default">Editar</a> <a href=""
							class="btn btn-default">Deletar</a></td>
					</tr>
					<tr>
						<td>002</td>
						<td>Jackson</td>
						<td>jac94@outlook</td>
						<td><a href="" class="btn btn-default">Editar</a> <a href=""
							class="btn btn-default">Deletar</a></td>
					</tr>
				</table>
			</div>
				<?php } else { ?>
				<?=(isset($_GET['msg']))?$_GET['msg']:'';?>
				
					<form action="aluno_valida.php"method="post">

						<label for="id" class="labelform"> <b> id </b>
						</label> <input type="text" name="id" id="Nome" class="inputform" />
		
						<label for="Nome" class="labelform"> <b> nome </b>
						</label> <input type="text" name="nome" id="Nome" class="inputform" />
		
						<label for="email" class="labelform"> <b> email </b>
						</label> <input type="text" name="email" id="email"
							class="inputform" /> <input type="submit" />
		
		
		
		
					</form>
					
				<?php } ?>
				
			
		<?php
		}
		if (isset ( $_GET ['menu'] ) && $_GET ['menu'] == 'dashboard') {
			?>
			<div class="row">
				<h1>Dashboard</h1>
				<ol class="breadcrumb">
					<li><a href="#">Maestro</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</div>	
			
			
			<?php
		}
		if (isset ( $_GET ['menu'] ) && $_GET ['menu'] == 'professores') {
			?>
			<div class="row">
				<a href="aluno_lista.php?menu=professor&formulario=1"
					class="btn btn-default">Adicionar</a>
				<table class="table">
				<ol>
			</div>
			
			
			
			<?php if (isset ( $_GET ['professores'] ) && $_GET ['formulario'] == 0) { ?>
			
			<div class="row">
				<a href="" class="btn btn-default">Adicionar</a>
				<table class="table">
					<tr>
						<td><b>ID</b></td>
						<td><b>Nome</b></td>
						<td><b>E-mail</b></td>
					</tr>
					<tr>
						<td>001</td>
						<td>Smith</td>
						<td>smith@outlook</td>
						<td><a href="" class="btn btn-default">Editar</a> <a href=""
							class="btn btn-default">Deletar</a></td>
					</tr>
					<tr>
						<td>002</td>
						<td>Jackson</td>
						<td>jac94@outlook</td>
						<td><a href="" class="btn btn-default">Editar</a> <a href=""
							class="btn btn-default">Deletar</a></td>
					</tr>
				</table>
			</div>
			<?php } else { ?>
				
					<form action=" " method="post">

						<label for="ID" class="labelform"> <b> ID </b>
						</label> <input type="text" name="ID" id="Nome" class="inputform" />
		
						<label for="Nome" class="labelform"> <b> Nome </b>
						</label> <input type="text" name="Nome" id="Nome" class="inputform" />
		
						<label for="E-mail" class="labelform"> <b> E-mail </b>
						</label> <input type="text" name="E-mail" id="E-mail"
							class="inputform" /> <input type="submit" />
		
		
		
		
					</form>
			<?php } ?>	
			
			
			
			<?php
		}
		
		if (isset ( $_GET ['menu'] ) && $_GET ['menu'] == 'cordenadores') {
			?>
			<div class="row">
				<h1>Dashboard</h1>
				<ol class="breadcrumb">
					<li><a href="#">Maestro</a></li>
					<li class="active">Coordenadores</li>
				</ol>
			</div>
			<div class="row">
				<a href="" class="btn btn-default">Adicionar</a>
				<table class="table">
					<tr>
						<td><b>ID</b></td>
						<td><b>Nome</b></td>
						<td><b>E-mail</b></td>
					</tr>
					<tr>
						<td>001</td>
						<td>Smith</td>
						<td>smith@outlook</td>
						<td><a href="" class="btn btn-default">Editar</a> <a href=""
							class="btn btn-default">Deletar</a></td>
					</tr>
					<tr>
						<td>002</td>
						<td>Jackson</td>
						<td>jac94@outlook</td>
						<td><a href="" class="btn btn-default">Editar</a> <a href=""
							class="btn btn-default">Deletar</a></td>
					</tr>
				</table>
			</div>
			
			
			<?php
		}
		
		if (isset ( $_GET ['menu'] ) && $_GET ['menu'] == 'sai') {
			?>
			<div class="row">
				<h1>Dashboard</h1>
				<ol class="breadcrumb">
					<li><a href="#">Maestro</a></li>
					<li class="active">Sair</li>
				</ol>
			</div>
			<form>
				<h1>Você deseja sair?</h1>
				<input type="submit" value="Sair" />
			</form>
			
			<?php
		}
		
		?>
		</div>
	</div>


	<footer>
		<div class="container">

			<div class="row">

				<div class="col-lg-12 text-center">
					<p>Sistema Maestro. Versão 1.0.0.1</p>

				</div>

			</div>

		</div>


	</footer>


</body>
</html>