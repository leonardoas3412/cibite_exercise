<?php
  include('../banco.php');
  
  $texto = $_POST['t'];
 
	$sql="SELECT * FROM tbprof WHERE nome like '%$texto%'";
  
   $consulta = $conexao->query($sql);
 
   
     if ($consulta->num_rows > 0 )
	 {
	     while ( $linha=$consulta->fetch_array(MYSQLI_ASSOC))
			   {
				echo '<tr>
						<td>'.$linha['codprof'].'</td>
						<td>'.$linha['Nome'].'</td>
						<td>'.$linha['especialidade'].'</td> 
						<td>'.$linha['CBO'].'</td>
							<td>
							<a title="alterar" href="tupdate.php?cod='.$linha['codprof'].'" class="btn btn-info"><i class="fa fa-edit"></i>
							<a title="delete" onclick="validardelete('.$linha['codprof'].')" class="btn btn-danger"><i class="fa fa-trash"></i>
							</td>
						</tr>';
				  
		  }
     }
	 else
	 {
		 echo "vazio";
		
		 
	 }
		  
 

?>