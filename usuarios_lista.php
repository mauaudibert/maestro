<table>
	<tr>
		<td>ID</td>
		<td>Usuario</td>
		<td>Senha</td>
		<td>SituaÃ§Ã£o</td>
	</tr>
	<?php
	//escrever o processo de busca dos dados no arquivo
	$ponteiroArquivo = fopen('arquivo_usuarios.txt', 'r');
	
	if($ponteiroArquivo){
		//arquivo encontrado
		
		//ler arquivo
		while(!feof($ponteiroArquivo)){
			//obtem a linha e posiciona o ponteiro na proxima linha
			$linha = fgets($ponteiroArquivo, 1024);
			
			//inicializa a variavel dados com vazio
			$dados = array();
			
			//quebrar a string a cada ponto-virgula
			$dados = explode(';', $linha);
			
			//imprimir a linha da tabela
			?>
			<tr>
				<td><?php echo $dados[0];?></td>
				<td><?php echo $dados[1];?></td>
				<td><?php echo $dados[2];?></td>
				<td><?php echo $dados[3];?></td>
			</tr>
			<?php
		}
		
	}else{
		//arquivo nÃ£o encontrado
		?>
		<tr>
			<td colspan="4">Arquivo Vazio</td>
		</tr>
		<?
	}
	
	?>
</table>
