<?php

	  
	
    //conexão com banco de dados
    include('../banco.php');

    //receber os dados por POST
    $nome = $_POST['nome'];
    $especialidade = $_POST['especialidade'];
	$cbo = $_POST['cbo'];
	
			$sql="INSERT INTO tbprof (codprof, Nome, especialidade, CBO) VALUES (NULL, '$nome', '$especialidade', '$cbo');";
	
		

    //executando a INSERT no banco
          $consulta = $conexao->query($sql);

   //verificar se o INSERT deu certo
   if($consulta == true){
        header('location:listaprofissional.php?add=ok');
    }else{
        header('location:listaprofissional.php?add=Wrong');        
    }

?>