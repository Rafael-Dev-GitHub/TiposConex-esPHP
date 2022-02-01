<?php
    // Habilita todos os erros exceto falha de indice
	mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
	// function conectadb()
	// {
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
	
	    $stmt = $conexao->query("SELECT * FROM cliente");
	while ($linha=$stmt->fetch())
	{
		echo "Nome: ".$linha["nome"]."</br>";
		echo "Telefone: ".$linha["telefone"]."</br>";
	}
	
?>