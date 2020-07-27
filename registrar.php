<?php 

include 'conectar.php';

	    $name = $_POST['nombre'];
	    $apellido = $_POST['apellido'];
	    $correo = $_POST['correo'];
	    $password = $_POST['password'];
	    $sql = "INSERT INTO estudiante(nombre, apellido, correo, password) VALUES ('$name','$apellido','$correo','$password')";
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