<?php 

$id=filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if($id){
	$buffer= array();
	
	//abrir o arquivo
	$ponteiroArquivo = fopen('arquivo_aluno.txt' , 'r');
	//manipulei o arquivo
	while (!feof($ponteiroArquivo)){

		$linha = fgets($ponteiroArquivo, 1024);
		$linhaAtual = explode(';', $linha);
		if($linhaAtual[0]!= $id){
			$buffer[]=$linha;
		}
	}
	//fechei o arquivo	}
	fclose($ponteiroArquivo);
	
	
	
	//abrir o arquivo denovo
	$ponteiroArquivo1 = fopen('arquivo_aluno.txt' , 'w');
	//escrever no arquivo
	foreach($buffer as $linha1){
		fwrite($ponteiroArquivo1, $linha1);
		
	}
	//depois fechar o arquivo
	fclose($ponteiroArquivo1);
	$mensagem = 'exclusão realizado com sucesso';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=0" );
}else{
	$mensagem = 'Informe o id para deletar';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=0" );
}



?>