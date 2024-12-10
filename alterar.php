<?php
    //conexão com banco de dados
    include('../banco.php');
    //receber os dados por POST
	$codprof = $_GET['cod'];
    $nome = $_GET['nome'];
    $especialidade = $_GET['especialidade'];
	$cbo = $_GET['cbo'];		echo &codprof;	echo &nome;	echo &especialidade;	echo &cbo;
	$sql="UPDATE tbprof SET Nome = '$nome', especialidade = '$especialidade', CBO = 'cbo' where codprof = '$codprof'";

    //executando a UPDATE no banco
    $consulta = $conexao->query($sql);
   //verificar se o UPDATE deu certo
   if($consulta == true){
        header('location:listaprofissional.php?add=ok');
    }else{
       // header('location:listaprofissional.php?add=Wrong');        
    }

?>