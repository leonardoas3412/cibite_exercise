<?php
  include('../banco.php');
  
  $texto = $_POST['t'];
 
 $sql = 'select * from tbpro where descricao like "%'.$texto.'%"';
  
   $consulta = $conexao->query($sql);
 
   
     if ($consulta->num_rows > 0 )
	 {
	     while ( $linha=$consulta->fetch_array(MYSQLI_ASSOC))
			   {
				     echo '<tr>';
					 echo '<td>'.$linha['codpro'].'</td>';
					 echo '<td>'.$linha['descricao'].'</td>';
					 echo '<td>'.$linha['precovenda'].'</td>';
					 echo '<td> <button id='.$linha['codpro'].'|A> Alterar </button></td>';
					 echo '<td> <button id='.$linha['codpro'].'|E> Excluir </button></td>';
				   
				   echo '</tr>';
				  
		  }
     }
	 else
	 {
		 echo "vazio";
		
		 
	 }
		 
  
  
  

?>