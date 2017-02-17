<?php
$id = filter_input ( INPUT_POST, 'id', FILTER_VALIDATE_INT );
$nome = filter_input ( INPUT_POST, 'nome', FILTER_SANITIZE_STRING );
$email = filter_input ( INPUT_POST, 'email', FILTER_SANITIZE_STRING );

if (! $id) {
	$mensagem = 'informe os id';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
} elseif (! $nome) {
	$mensagem = 'informe os nome';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
} elseif (! $email) {
	$mensagem = 'informe os email';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
} else {
	//var_dump ( $id );
	//var_dump ( $nome );
	//var_dump ( $email );

	$fd = fopen ( "arquivo_aluno.txt", "a" );
fwrite ( $fd, "\n$id;$nome;$email" );
fclose ( $fd );

	$mensagem = 'Cadastro realizado com sucesso';
	$mensagem = 'informe os email';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=0" );
	
	
}






/*
 * if (isset ( $_POST ['id'] )) {
 * $id = $_POST ['id'];
 * } else {
 * $id = null;
 * }
 *
 * if (isset ( $_POST ['nome'] )) {
 * $nome = $_POST ['nome'];
 * } else {
 * $nome = null;
 * }
 *
 * if (isset ( $_POST ['email'] )) {
 * $email = $_POST ['email'];
 * } else {
 * $email = null;
 * }
 * if ($id != null && $nome != null && $email != null) {
 * if (trim ( $id ) == '' or !is_int ( $id )) {
 * $mensagem = 'informe os id';
 * // Header informa local que está o documento
 * header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
 * } elseif (trim ( $nome ) == '' or !is_int ( $nome )) {
 * $mensagem = 'informe os nome';
 * header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
 * } elseif (trim ( $email ) == '' or !is_int ( $email )) {
 * $mensagem = 'informe os email';
 * header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
 * // Armazenando os dados em um arquivo
 * } else {
 * }
 * } else {
 * // enviar mensagem
 * $mensagem = 'informe os dados';
 * header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
 * }
 */
?>