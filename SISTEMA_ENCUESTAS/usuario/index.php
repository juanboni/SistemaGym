<?php 

  date_default_timezone_set("America/Lima");
  $date = new DateTime();

  $fecha_inicio = $date->format('Y-m-d H:i:s');
  
 ?>


<!DOCTYPE html>
<html lang="es">
<head>
  	<!-- Required meta tags -->
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Favicon - FIS -->
    <link rel="shortcut icon" href="../imagenes/Logo-fis.png">
    <link rel="stylesheet" href="../css/usuario.css">

  	<title>USUARIO-Encuestas</title>
    <script type="text/javascript" language="javascript">   
      history.pushState(null, null, location.href);
      window.onpopstate = function () {
        history.go(1);
      };
    </script>

</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="javascript:void(0)">Sistema de Encuestas Gimnasio UPS</a>
     
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>
      

      <!--NAVBAR-->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline my-2 my-lg-0" style="color: #fff">
          
         <?php   
        session_start();
        if (isset($_SESSION['u_usuario']) && isset($_SESSION['id_usuario'])) {
          echo "Bienvenido " . $_SESSION['u_usuario'] . "\t";

          echo "<a href='../cerrar_sesion.php' class='btn btn-danger' style='margin-left: 10px'>Cerrar Sesión</a>";
        } else {
          header("Location: ../index.php");
        }

       ?>
         
        </form>
      </div>
    </nav>

	<!-- Content Section -->
	<div class="container" style="margin-top: 30px;">
	    <div class="row">
	        <div class="col-md-12 row">
	        	<div class="col-md-12 col-xs-12">
	        		<h3> <strong>Sistema Gimnasio UPS </strong></h3>
	        	</div>
	        </div>
	    </div>
	    <hr/>
	    <div class="row">
	        <div class="col-md-12">
            <img id="pesass-img" class="profile-img-card" src="../imagenes/logoupsusuario.png" />
	         <h4>Encuestas:</h4>
           
	         <div class="table-responsive">
	            <div id="tabla_encuestas"></div>
              <p>Responder cada uno de los cuestionarios !</p>
              <div class="container text-center" style="margin-bottom: 20px">
                <a href="reporte.php" class="btn btn-primary" target="_blank">GENERAR TICKET</a>
                <!--
                <a href="reporte2.php?id_encuesta=<?php echo $id_encuesta ?>" class="btn btn-primary" target="_blank">GENERAR REPORTE2</a>
                -->
              </div>
	         </div>
	        </div>
	    </div>
	</div>
	<!-- /Content Section -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="js/encuestas.js"></script>
 
</body>
</html>