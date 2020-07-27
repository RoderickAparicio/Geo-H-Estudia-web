<?php
session_start();
include 'conectar.php';

	    
	    $correo = $_POST['correo'];
	    $password = $_POST['password'];
	    
	    $sql = "SELECT * FROM estudiante WHERE correo='$correo' AND password= $password";
	    $resultado =$conex->query($sql);
	    // mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	header("location:index.html");
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>


           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
   

?>