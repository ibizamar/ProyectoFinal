<!DOCTYPE html>
<html lang="en" >
<head>
<?php
$con = mysqli_connect("localhost","root","","perfumeria");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

session_start();
error_reporting(0);

?>
    <title>Administrador</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/flor.png"/>
<!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
<!--===============================================================================================-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<link href='https://fonts.googleapis.com/css?family=Quattrocento Sans' rel='stylesheet'>
<!--===============================================================================================-->

</head>

<body>


<div class="container">
</br>
</br>
</br>
    <div class="jumbotron">
    <h1>Bienvenido Administrador</h1>
    <p>Realice modificaciones a la base de datos</p>
    </div>


<nav class="navbar navbar-inverse">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Administrador</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
        <li><a href="#"><span class="glyphicon glyphicon-wrench"></span></a></li> 
        <li><a href="admin1.php">Agregar Productos</a></li>
        <li><a href="admin2.php">Modificar Productos Existentes</a></li>
        <li><a href="admin3.php">Eliminar Productos</a></li>
        <li><a href="admin4.php">Historial</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="inicio.php">Salir</a></li>
        </ul>
        </div>
</nav>


        
        <?php
                $query2="SELECT pnombre, foto, h.idusuario, mnombre, h.cantidad from historial h, marca m, producto p where p.idproducto=h.idproducto and m.idmarca=p.idmarca";
                $resultado2=mysqli_query($con,$query2);
                $numfilas=mysqli_num_rows($resultado2);
                

                echo "<span class='mtext-141 cl10'>";
                echo "<center>Artículos Comprados:</center>";
                echo "</span>";
                echo "</br>";
                echo "</br>";
                echo "<div class='table-responsive'>";

                
                echo "<center>";
				echo "<table class='table table-hover'>";
                echo "<tr class='table_head'>";
				echo "<th class='column-1'>Producto</th>";
                echo "<th class='column-1'>Nombre</th>";
                echo "<th class='column-1'>Marca</th>";
                echo "<th class='column-4'>Cantidad</th>";
				echo "<th class='column-5'>Usuario</th>";
				echo "<th class='column-3'></th>";
				echo "</tr>";
	
				
					$cont=0;
					$cont2=0;
					$cantidad=0;
                    $total=0;
                    $total1=0;
                    

					while($row = mysqli_fetch_array($resultado2)){
				      
					  echo "<tr>";
					  echo "<td>";
					  echo "<img src='img/".$row['foto']."' alt='IMG' width='100px'>";
					  echo "</td>";
                      echo "<td>" .$row['pnombre']. "</td>";
                      echo "<td>". $row['mnombre']. "</td>";
                      echo "<td>" . $row['cantidad'] . "</td>";
					  echo "<td>". $row['idusuario']. "</td>";
					  echo "</tr>";

					  

					}  
                    echo "</table>";
                    echo "</div>";
                    echo "</center> ";


                ?>
                
    </div>
                
 
</html>
</body>


