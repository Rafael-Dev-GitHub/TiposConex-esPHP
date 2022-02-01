<?php
    require_once("conecta_POO.php");
 
    $conexao=conectadb();
	$conexao->set_charset("utf8");
	
	$sql = "SELECT * FROM cliente;";
	echo $sql."</br>";
	$result = $conexao->query($sql);
	if ($result->num_rows>0)
	{
		while ($linha = $result->fetch_assoc())
		{
			echo "Nome:".$linha["nome"]."<br/>";
			echo "Telefone: ".$linha["telefone"]."<br/>";
			echo "<hr/>";
		}
	} else
	{
		echo "sem resultado";
	}
     $conexao->close();
?>