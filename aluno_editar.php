<?php
$id = filter_input ( INPUT_POST, 'id', FILTER_VALIDATE_INT );
$nome = filter_input ( INPUT_POST, 'nome', FILTER_SANITIZE_STRING );
$email = filter_input ( INPUT_POST, 'email', FILTER_SANITIZE_STRING );

if (! $id) {
	$mensagem = 'informe os id';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=0" );
} elseif (! $nome) {
	$mensagem = 'informe os nome';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=0" );
} elseif (! $email) {
	$mensagem = 'informe os email';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=0" );
} else {

	$buffer = array ();
	
	// abrir o arquivo
	$ponteiroArquivo = fopen ( 'arquivo_aluno.txt', 'r' );
	
	// manipulei o arquivo
	while ( ! feof ( $ponteiroArquivo ) ) {
		$linha = fgets ( $ponteiroArquivo, 1024 );
		$linhaAtual = explode ( ';', $linha );
		if ($linhaAtual[0] != $id) {
			$buffer[] = $linha;
		}else{
			$buffer[] = "$id;$nome;$email";
		}
	}
	// fechei o arquivo }
	fclose ( $ponteiroArquivo );
	
	// abrir o arquivo denovo
	$ponteiroArquivo1 = fopen ( 'arquivo_aluno.txt', 'w' );
	// escrever no arquivo
	foreach ( $buffer as $linha1 ) {
		fwrite($ponteiroArquivo1, $linha1);
		
	}
	// depois fechar o arquivo
	fclose ( $ponteiroArquivo1 );
	
	
	$mensagem = 'alterado com sucesso';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=0" );

}
?>