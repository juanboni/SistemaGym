<?php


    // Incluiye archivo de conexión a base de datos
    include("conexion.php");
    echo  "se conecto!!!!!!!!!!!";

    // Establecemos la zona horario
    date_default_timezone_set("America/Lima");
  	$date = new DateTime();
  	$fecha_inicio = $date->format('Y-m-d H:i:s');

    // Obtener valores
    $id_cedula  = $_POST['inputCedula'];
    $password      = $_POST['inputPassword'];
    $nombres = $_POST['inputNombres'];
    $apellidos = $_POST['inputApellidos'];
    $email = $_POST['inputEmail'];
    //echo $id_cedula,$password,$nombres,$apellidos,$email ;

    $query = "INSERT INTO usuarios (id_usuario, clave,nombres,apellidos, email, id_tipo_usuario)
              VALUES ('$id_cedula', '$password', '$nombres', '$apellidos', '$email', 2)";

    $resultado = $con->query($query);

    //echo "       ::::::::    ";
    ////echo "resultado   ";
    //echo $resultado;
   


    if ($query) {
      echo'<script type="text/javascript">
    alert("Usuario ingresado con exito ");
    window.location.href="login.php";
    </script>';
	    
	    
	  }

?>
