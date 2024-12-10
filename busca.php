<?php
  include('../banco.php');
  
  $texto = $_POST['t'];
 
	$sql="SELECT * FROM tbprof WHERE nome like '%$texto%'";
                  $sql="DELETE FROM tbprof where cbo ='$CBO'"
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
							<a class="btn btn-danger" href="delete.php?cod=.'$linha.['codprof']. '" title="delete"><i class="fa fa-trash"></i>
							</td>
						</tr>';
				  
		  }
     }
	 else
	 {
		 echo "vazio";
		
		 
	 }
		  
 

?>