		<div class="row">
				<h1>Aluno</h1>
				<ol class="breadcrumb">
					<li><a href="#">Maestro</a></li>
					<li>Aluno</li>
				</ol>

			</div>

			
			<?php if (isset ( $_GET ['formulario'] ) && $_GET ['formulario'] == 0) { ?>
				<div class="row">
				<a href="aluno_lista.php?menu=aluno&formulario=1"
					class="btn btn-default">Adicionar</a>
					<?php
				// exibir mensagem de retorno
				$msg = filter_input ( INPUT_GET, 'msg', FILTER_SANITIZE_STRING );
				if ($msg) {
					echo $msg;
				}
				?>
					<?php
				// escrever o processo de busca dos dados no arquivo
				$ponteiroArquivo = fopen ( 'arquivo_aluno.txt', 'r' );
				
				?>
				
				
					
				<table class="table">
					<tr>
						<td><b>ID</b></td>
						<td><b>Nome</b></td>
						<td><b>E-mail</b></td>
						<td><b>Ações</b></td>
					</tr>
					<?php
				// percorrer o arquivo
				while ( ! feof ( $ponteiroArquivo ) ) {
					
					$linha = fgets ( $ponteiroArquivo, 1024 );
					
					$dados = explode ( ';', $linha );
					
					?>	
					<tr>
						<td><?=$dados[0];?></td>
						<td><?=$dados[1];?></td>
						<td><?=$dados[2];?></td>
						<td>
							<a href="aluno_lista.php?menu=aluno&formulario=1&id=<?=$dados[0] ;?>" class="btn btn-default">Editar</a> 
						<a href="aluno_deleta.php?id=<?=$dados[0] ;?>"
							class="btn btn-default">Deletar</a></td>
					</tr>
					<?php
				}
				?>
					
				</table>
			</div>
				<?php } else { ?>
				<?=(isset($_GET['msg']))?$_GET['msg']:'';?>
				
				<?php 
					$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
					$registro = array();
					if($id){
						$ponteiroArquivo= fopen('arquivo_aluno.txt', 'r');
						while(!feof($ponteiroArquivo)){
							$linha= fgets($ponteiroArquivo, 1024);
							$dados= explode(';', $linha);
							if($dados[0]==$id){
								$registro=$dados;
							}
						}
					}
				?>
					<form action="<?=($id)? 'aluno_editar.php':'aluno_valida.php';?>" method="post">

				<label for="id" class="labelform"> <b> id </b>
				</label> <input type="text" name="id" id="Nome" class="inputform" value="<?=isset ($registro[0]) ? $registro[0]:'';?>" />

				<label for="Nome" class="labelform"> <b> nome </b>
				</label> <input type="text" name="nome" id="Nome" class="inputform" value="<?=isset ($registro[1]) ? $registro[1]:'';?>" />

				<label for="email" class="labelform"> <b> email </b>
				</label> <input type="text" name="email" id="email"
					class="inputform" value="<?=isset ($registro[2]) ? $registro[2]:'';?>" /> <input type="submit" />




			</form>
					
				<?php } ?>
			