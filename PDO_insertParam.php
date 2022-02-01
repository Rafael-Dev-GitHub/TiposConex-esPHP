<?php
		$endereco = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "empresa";
		
		try
		{
			$conexao = new PDO("mysql:host=$endereco;dbname=$banco", $usuario,$senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
		}
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
		$nome = "Agostinho Carrara";
		$endereco = "Bar e Sinuca, 123";
		$telefone = "(00) 00000-0000";
		$email = "agostinho@email.com";
		$idade = 30;
		
		$stmt = $conexao->prepare("INSERT INTO cliente(nome, endereco, telefone, email, idade) VALUES (:nome,:endereco,:telefone,:email,:idade)");	
    try{
	$stmt->bindParam(":nome",$nome);
	$stmt->bindParam(":endereco",$endereco);
	$stmt->bindParam(":telefone",$telefone);
	$stmt->bindParam(":email",$email);
	$stmt->bindParam(":idade",$idade);
	$stmt->execute();
	
	//$stmt->query($conexao);
	    echo "Registro gravado com sucesso";
	}catch (PDOException $e)
	{
		echo $sql. "<br/>".$e->getMessage();
	}
	$conexao = null;
?>