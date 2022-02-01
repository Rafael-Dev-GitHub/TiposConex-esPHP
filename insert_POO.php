<?php 
   require_once("conecta_POO.php");

    $conexao=conectadb();

	$nome = "João da Silva";
	$endereco = "Rua Kalamango, 32";
	$telefone = "(41) 5555-5555";
	$email = "joaosilva@teste.com";
	$conexao->set_charset("utf8");
	$sql = "INSERT INTO `empresa`.`cliente` (`nome`,`endereco`,`telefone`,`email`)VALUES('$nome', '$endereco', '$telefone','$email')";
    echo $sql."<br/>";
	if ($conexao->query($sql) === TRUE) {
		echo "Adicionado com sucesso";
	} else {
		echo "Erro: ". $sql . "<br>" . $conexao->error;
	}
	$conexao->close();
?>