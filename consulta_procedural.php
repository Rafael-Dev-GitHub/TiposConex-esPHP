<?php
    require_once("conecta_procedural.php");
	
	$sql = "SELECT id_cliente, nome, email FROM cliente";
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0){
		//UMA SAIDA A CADA LINHA (ROW)
		while($linha=mysqli_fetch_assoc($result)){
			echo "id: ".$linha["id_cliente"]." -Nome: ".$linha["nome"]."";
			echo $linha["email"]."<br/>";		
		}
	}else{
		echo "0 resultados";
	}
	mysqli_close($conn);
?>