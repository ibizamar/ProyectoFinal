<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     </head>

<?php
$con = mysqli_connect("localhost","root","","perfumeria");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

      $usuario = $_POST['username'];
			$correo = $_POST['correo'];
			$contra = $_POST['passwd'];
			$fecha = $_POST['fecha'];
			$tarjeta = $_POST['tarjeta'];
			$direccion = $_POST['direccion'];


      $sql="INSERT INTO usuarios(unombre, mail, contrasena, fecha, tarjeta, direccion)
      VALUES ('$usuario', '$correo', '$contra', '$fecha', '$tarjeta', '$direccion');";
			$result = mysqli_query($con,$sql);

			if (!mysqli_query($con,$sql)) {
			die('Error: ' . mysqli_error($con));
			}

			if($sql){
			echo "<div class='alert alert-success fade in'>";
			echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
			echo "<strong>";
			echo"Registro Exitoso! Inicie Sesión para comprar";
			echo"</strong>";
			echo "</div>";
			}

    //header("Refresh: 3; URL=http://localhost/ProyectoFinal/formulario1.php");


?>
<html>