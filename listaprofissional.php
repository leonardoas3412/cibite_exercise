<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CIBITE SISTEMAS</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  
  <style>
    label{ color:black; font-weight:bold}
	table tr {color:black; }
  </style>
  
  
  
  
  
  
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include ('../menu.php'); ?>
   
   <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- BARRA TOPO -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
			LABORATÓRIO DE SOFTWARE - 3º INFORMATICA
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown no-arrow">
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>   Sair  </a>
			</li>
          </ul>
        </nav>
        <!-- End topo -->

       

	   <!-- Begin Page Content -->
        <div class="container-fluid">
          <!--CONTEUDO PRINCIPAL AQUI-->
			
			
			
			<div class="card card-body">
			         <div id="message">  </div>
					 
					 <div class="form-group">             
						    <div class="col-md-10">
									 <label >Profissional</label>
									  <div class="input-group text-left"><!-- input com botao para busca -->
										<form id="formbusca" method="post" action="javascript:func()" >
										
										    <input id="texto" type="text" class="form-control input"  >
										    <span class="input-group-btn">
										
										
											<h3 class="tile-title">
		 
		  								   <button class="btn btn-primary" type="submit" id="lista_prduto"><i class="glyphicon glyphicon-search"></i>Buscar</button>
										   <a href="frmprofissional.php" class="btn btn-primary" id="novo" type="button">+Novo cadastro</a>
										
										</form>	
										</span>
									  </div>
						   </div>  
					
					 
					 
					 
					 
					 <!--pegando tabela do banco de dados-->
						<table class="table table-sm " id="tableprod">
						   <thead >
							  <tr style="background:#b5ceb5">
								 <th >Codprof</th>
								 <th >Nome</th>
								 <th >Especialidade</th>
								 <th >CBO</th>
								 <th >Opções</th>
						  </tr>
							</thead>
					    <tbody id="body">
					      <!-- codigo PHP -->
						<?php


								include('../banco.php');
							
								$sql="SELECT * FROM tbprof";

								
								$consulta = $conexao->query($sql);

								if($consulta == true){
								if($consulta -> num_rows > 0){
									
									
									while($linha = $consulta->fetch_array(MYSQLI_ASSOC)){
									echo '<tr>
											<td>'.$linha['codprof'].'</td>
											<td>'.$linha['Nome'].'</td>
											<td>'.$linha['especialidade'].'</td> 
											<td>'.$linha['CBO'].'</td>
												<td>
												<a title="alterar" href="update.php?cod='.$linha['codprof'].'"
												class="btn btn-info"><i class="fa fa-edit"></i>
												
												<a title="delete" href="delete.php?cod='.$linha['codprof'].'" 
												class="btn btn-danger"><i class="fa fa-trash"></i>
												</td>
											</tr>';

									} 
								}

								}

							
					?>					  
					    </tbody>
					  </table>
					
					 </div>  <!--FIM CARD GROU-->
			</div>  <!--fim card-->
					 
			

        </div>  <!-- End CONTAINER FLUID -->
       </div>
      <!-- End of Main Content -->

     

	  <?php
	     include('../rodape.php')
	  ?>
  
  
  
  <!-- ################## Bootstrap core JavaScript ################## -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
   <script src="../js/sb-admin-2.min.js"></script>
 
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>
  <!--  Incluido Mensagem  -->
  <script src="../mensagem/bootbox.min.js"></script>
  
  
  
    <!-- ################## JQUERY PARA FAZER A BUSCA ################## -->
  <script>
   $(document).ready(function() {
			$('#formbusca').submit(function(){
				let texto = $('#texto').val();
				
				$('#message').fadeIn(500).delay(3000).fadeOut(500);
						
				//$.post( arquivo, {campo}  , retorno )
				$.post('busca.php', {t:texto } , function(retorno){
				   if (retorno != 'vazio')
				   {
					   //alert('sucesso')
					    $('#message').html("<div class='alert alert-success'> BUSCA REALIZADA COM SUCESSO!</div>");
					    $('#body').html(retorno);
				   }
					else
					{
						alert('algo deu errado');
						
					}
					
				}); // fim post 
				
				
			})// fim submit 
	
	//alterar		
    $("table").on("button","click", function() {
        let codprof=$(this).attr("codprof");
        let dados = id.split("|");
        let cod = dados[0];
        let botao = dados[1];
        
        //bootbox alterar
		if ((cod>0) && (botao =='A')){
		        bootbox.dialog({
					message: "Deseja alterar os dados do profissional?",
					title: "ALTERAR",
					
					buttons: {
					  cancelar: {	label: "Cancelar",	className: "btn-default",  callback: function(){	}   },
					  
					  confirmar: {
					  label: "Confirmar",	className: "btn-success",
					  callback: function() {
					     
					    $(location).attr('href',"update.php?cod="+codprof);  
						
					  }// fim function 
					  }// fim buttons confirm
				    }// fim buttons
	            )}; // fim bootbox  
        }// fim do if
		
		
		//bootbox delete
		if ((cod>0) && (botao =='E')){
		        bootbox.dialog({
					message: "Deseja deletar os dados do profissional?",
					title: "DELETAR",
					
					buttons: {
					  cancelar: {	label: "Cancelar",	className: "btn-default",  callback: function(){	}   },
					  
					  confirmar: {
					  label: "Confirmar",	className: "btn-wagner",
					  callback: function() {
					  $('#message').fadeIn(500).delay(1000).fadeOut(500);
					  
					    $(post).('delete.php',{codprof:cod}, function(retorno){
						  if(retorno =='sucessor'){ 
						   bootbox.alert('Profissional excluído com sucesso');
						   $('#lista_profissional').click();
						  }
						});// fim do post 
						
					  }// fim function 
					  }// fim buttons confirm
				    }// fim buttons
	            )}; // fim bootbox
				  
        }// fim do if
            
				  
    });//fim do ON
   
   
   
 </script>

</body>

</html>
