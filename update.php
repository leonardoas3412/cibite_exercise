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
			LABORATÓRIO DE SOFTWARE - 3º INFORMÁTICA
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
		    <?php
		     include('../banco.php');
		    
			 $codprof = $_GET ['cod'];
             $sql = "select * from tbprof where codprof='$codprof'";
             $consulta = $conexao->query($sql);
             $linha = $consulta->fetch_array(MYSQLI_ASSOC);
		    
		    ?>
			<div class="card card-body">
			  
			<form id="update.php"  method="post" action="javascript:func()" >
			
			 	
			  <div id="message">  </div>

			 <h2 class="text-center">ALTERAÇÃO DE CADASTRO</h2>
			  <hr>
						  <div class="form-group">
							<label> Código </label>
							<input type="text" class="form-control" id="nome" value="<?php echo $linha['codprof'];?>">
						  </div>	
						  <div class="form-group">
							<label> Nome </label>
							<input type="text" class="form-control" id="nome" value="<?php echo $linha['Nome'];?>">
						  </div>					  			
							<div class="form-group col-md-5">
							  <label> Especialidade </label>
							  <input type="text" class="form-control" value="<?php echo $linha['especialidade'];?>" id="especialidade">
							</div>
							<div class="form-group col-md-5">
							  <label> CBO </label>
							  <input type="text" class="form-control" value="<?php echo $linha['CBO'];?>" id="cbo">
							</div>
							
						  </div>
						  
						  
						 <div class="form-group col-md-6">
						  
						  <a href="alterar.php" type="submit" id="update"class="btn btn-primary">Alterar</a>
						  <a href="listaprofissional.php" type="button" class="btn btn-info">Retornar</a>
						</div> 
						</form>

		</div>
		  
		  
		 
		  <!--fim conteudo-->

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


 <script>
   
  $(document).ready(function(){
	  
		$("#formcad").submit(function(){
				let mens_erro = "<div class='alert alert-warning'><i class='glyphicon glyphicon-exclamation-sign'></i><button type=button class='close' data-dismiss='alert'>[X] Fechar</button>Busca realizada com sucesso!!</div>"
				let mens_sucesso = "<div class='alert alert-success'><i class='glyphicon glyphicon-ok'></i><button type=button class=close data-dismiss=alert>[X] Fechar</button>Busca realizada com sucesso</div>"
				

				bootbox.dialog({
					message: "Deseja alterar dados do profissional?",
					title: "GRAVAR",
					
					buttons: {
					  cancelar: {	label: "Cancelar",	className: "btn-default",  callback: function(){	}   },
					  
					  confirmar: {
					  label: "Confirmar",	className: "btn-success",
					  callback: function() {
						// codigo do post aqui
					        let codprof = $('#cod').val();
        					let nome = $('#nome').val();
        		        	let especialidade = $('#especialidade').val();
        		        	let cbo = $('#cbo').val();
        					
							$.post("alterar.php",{cod:codprof, nome:nome, especialidade:especialidade, cbo:cbo},
							function(retorno){
							   if (retorno != 'vazio')
							   {
								$(location).attr('href',"listaprofissional.php?");
							   }
							   else
							   {
								$('#message').html(retorno);
							   }
							});
						}// fim método post	  
					}// fim buttons confirm
				   }// fim buttons
				  }); // fim bootbox
			}); // fim funciton principal
	
					
					
	});  // fim funciton principal
   

			   
   
   
 </script>



</body>

</html>

