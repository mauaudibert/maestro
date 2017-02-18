<?php  $sair = filter_input(INPUT_GET, 'sair', FILTER_VALIDATE_INT);?>
<?php  if($sair ==1){?>
}
<?php

session_destroy ();
?>
<?php header('location:login.php');?>
<div class="row">
	<h1>Sair</h1>
	<ol class="breadcrumb">
		<li><a href="#">Maestro</a></li>
		<li class="active">Sair</li>
	</ol>
</div>
<form action= "index,php?pagina=sair">
	<h1>Você deseja sair?</h1>
	<button type="submit" class="btn btn-default" name="sair" value="1">Sim</button>
	<a haref="index.php?pagina=dashboard" class="btn btn-default">Não</a>
</form>
</div>

