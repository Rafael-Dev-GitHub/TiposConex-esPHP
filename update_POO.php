<?php 
   require_once("conecta_POO.php");

    $conexao=conectadb();

	$nome = "Maria da Silva";
	$endereco = "Rua Kalamango, 32";
	$telefone = "(41) 5555-5555";
	$email = "joaosilva@teste.com";
	$conexao->set_charset("utf8");
	$sql = "UPDATE `empresa`.`cliente` SET nome='$nome', endereco='$endereco',telefone='$telefone',email='$email' WHERE nome='João da Silva'";
    echo $sql."<br/>";
	if ($conexao->query($sql) === TRUE) {
		echo "Alterado com sucesso";
	} else {
		echo "Erro: ". $sql . "<br>" . $conexao->error;
	}
	$conexao->close();
?>
