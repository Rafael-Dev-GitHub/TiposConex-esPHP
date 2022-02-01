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
	try
	{
	
		$nome = "João de Barro";
		$endereco = "Rua Ruy Barbosa, 123";
		$telefone = "(00) 00000-0000";
		$email = "email@email.com";
		$idade = 20;
		$sql = "INSERT INTO cliente(nome, endereco, telefone, email, idade) VALUES ('$nome','$endereco','$telefone','$email','$idade')";	
		$conexao->query($sql);
        echo "Registro gravado com sucesso";
	}catch (PDOException $e)
	{
		echo $sql. "<br/>".$e->getMessage();
	}
	$conexao = null;
?>