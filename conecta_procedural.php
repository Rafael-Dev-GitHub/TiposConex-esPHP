<?php
    $nomeservidor = "localhost";
	$usuario = "root";
	$senha = "";
	$bancodedados = "empresa";
	
	//CRIA A CONEXAO
	$conn = mysqli_connect($nomeservidor,$usuario,$senha,$bancodedados);
	
	//VERIFICA A CONEXÃO 
	if (!$conn){
		die ("conexao Falhou: ".mysqli_connect_error());
	} else {
		echo "Conectou por procedimento e fez a consulta<br/>";
	}
	
?>