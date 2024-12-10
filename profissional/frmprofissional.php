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
			  
			<form id="formcad" method="post" action="javascript:func()" >
			
			 	
			  <div id="message">  </div>

			 <h2 class="text-center">CADASTRO DE PRODUTOS</h2>
			  <hr>
						
						  <div class="form-group">
							<label >Nome</label>
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Informeo produto">
						  </div>					  			
							<div class="form-group col-md-5">
							  <label >especialidade</label>
							  <input type="text" class="form-control" name="especialidade" id="especialidade">
							</div>
							
							<div class="form-group col-md-5">
							  <label >CBO</label>
							  <input type="text" class="form-control" name="cbo" id="cbo">
							</div>
							
						  </div>
						  
						  
						 <div class="form-group col-md-6">
						  
						  <button type="submit" class="btn btn-primary">Gravar</button>
						  <a href="listaproduto.php" type="button" class="btn btn-info">Retornar</a>
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
   //$(function() {
	  
	$("#formcad").submit(function(){
			let mens_erro = "<div class='alert alert-warning'><i class='glyphicon glyphicon-exclamation-sign'></i><button type=button class='close' data-dismiss='alert'>[X] Fechar</button>Busca realizada com sucesso!!</div>"
			let mens_sucesso = "<div class='alert alert-success'><i class='glyphicon glyphicon-ok'></i><button type=button class=close data-dismiss=alert>[X] Fechar</button>Busca realizada com sucesso</div>"
		    
			//Pegar  os valores necessarios
			let nome = $('#nome').val();
			let especialidade = $('#especialidade').val();
			let cbo = $('#cbo').val();
			//fim
			
			bootbox.dialog({
				message: "Incluir Novo produto no Sistema?",
				title: "GRAVAR",
				
				buttons: {
				  cancelar: {	label: "Cancelar",	className: "btn-default",  callback: function(){	}   },
			      
				  confirmar: {
				  label: "Confirmar",	className: "btn-success",
				  callback: function() {
					// codigo do post aqui
					 $.post('insert.php', { nome:nome, especialidade:especialidade, cbo:cbo } , function(retorno){
				   if (retorno != 'vazio')
				   {
					   //alert('sucesso')
					    $('#message').html(mens_sucesso);
					    $('#body').html(retorno);
				   }
					else
					{
						alert(mens_erro);
						
					}
					
				});
					
						
					});// fim método post
					  
				}// fim function callback
			   }// fim buttons confirm
			  } // fim buttons
			}); // fim bootbox
	
					
					
	});  // fim funciton principal
			   
   
   
 </script>



</body>

</html>

