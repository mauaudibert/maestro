<div class="row">
	<h1>Coordenador</h1>
	<ol class="breadcrumb">
		<li><a href="#">Maestro</a></li>
		<li class="active">Coordenadores</li>
	</ol>
</div>

<?php if (isset ( $_GET ['formulario'] ) && $_GET ['formulario'] == 0) { ?>

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


<form>
	<label for="ID" class="labelform"> <b> ID </b>
	</label> <input type="text" name="ID" id="Nome" class="inputform" /> <label
		for="Nome" class="labelform"> <b> Nome </b>
	</label> <input type="text" name="Nome" id="Nome" class="inputform" />
	<label for="E-mail" class="labelform"> <b> E-mail </b>
	</label> <input type="text" name="E-mail" id="E-mail" class="inputform" />
	<input type="submit" /> <label for="unidade" class="labelform"> <b>
			unidade </b>
	</label> <input type="text" name="unidade" id="Nome" class="inputform" />
	<br /> <label for="disciplina" class="labelform"> <b> disciplina </b>
	</label> <input type="text" name="disciplina" id="Nome"
		class="inputform" />


</form>
<?php } ?>	
			