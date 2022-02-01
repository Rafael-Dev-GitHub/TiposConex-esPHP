<?php 
   require_once("conecta_POO.php");

    $conexao=conectadb();

	$conexao->set_charset("utf8");
	$sql = "DELETE FROM `empresa`.`cliente` WHERE nome='Maria da Silva'";
    echo $sql."<br/>";
	if ($conexao->query($sql) === TRUE) {
		echo "Removido com sucesso";
	} else {
		echo "Erro: ". $sql . "<br>" . $conexao->error;
	}
	$conexao->close();
?>
