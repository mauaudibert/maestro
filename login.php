<?php
session_start ();

// obter os dados
$usuario= filter_input ( INPUT_POST, 'usuario', FILTER_SANITIZE_STRING );
$senha= filter_input ( INPUT_POST, 'senha', FILTER_SANITIZE_STRING );

$mensagem ='';

// verificar se foram informados
if (!$usuario) {
	// informar para preencher usuário
	$mensagem= 'informe o usuario';
} elseif (!$senha) {
	// informar para preencher o usuario
	$mensagem= 'informe a senha';
} else {
	// Verificar se existe usuario e senha
}
if ($usuario== 'cabral' && $senha= 'brasil') {
	$_SESSION ['autenticado'] = true;
	header ( 'location: index.php?pagina=dashboard' );
} else {
	$mensagem= 'usuario ou senha incorretos';
}
?>

<html>
<head>
<title>Autenticação</title>
</head>
<body>
	<p><?php  echo $mensagem;?></p>
	<form method="post">
		<label>Usuário</label> <input type="text" name="usuario"
			value="<?php  echo $usuario ?>" /> <label>Senha</label> <input
			type="password" name="senha" />

		<button type="submit">acessar</button>

	</form>
</body>
</html>


