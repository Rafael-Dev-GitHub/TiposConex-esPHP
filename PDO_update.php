<?php
    // Habilita todos os erros exceto falha de indice
	// mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
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
	
	  $nome = "Beiçola";
		$endereco = "Bar e Sinuca, 123";
		$telefone = "(00) 00000-0000";
		$email = "beicola@email.com";
		$idade = 30;
		
		$stmt = $conexao->prepare("UPDATE `empresa`.`cliente` SET nome = :nome, endereco= :endereco, telefone= :telefone, email= :email, idade= :idade WHERE id_cliente=19");
    try{
	$stmt->bindParam(":nome",$nome);
	$stmt->bindParam(":endereco",$endereco);
	$stmt->bindParam(":telefone",$telefone);
	$stmt->bindParam(":email",$email);
	$stmt->bindParam(":idade",$idade);
	$stmt->execute();
	
	//$stmt->query($conexao);
	    echo "Registro alterado com sucesso";
	}catch (PDOException $e)
	{
		echo $sql. "<br/>".$e->getMessage();
	}
	$conexao = null;
?>