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
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Administrador: </a>
    </div>
            <ul class="nav navbar-nav">
            <li><a href="#">        </a></li> 
            <li class="active"><a href="#"><span class="glyphicon glyphicon-wrench"></span></a></li> 
            <li><a href="admin1.php">Agregar Productos</a></li>
            <li class="active"><a href="#"><span class="glyphicon glyphicon-wrench"></span></a></li> 
            <li><a href="admin2.php">Modificar Productos Existentes</a></li>
            <li class="active"><a href="#"><span class="glyphicon glyphicon-wrench"></span></a></li> 
            <li><a href="admin3.php">Eliminar Productos</a></li>
            <li class="active"><a href="#"><span class="glyphicon glyphicon-wrench"></span></a></li> 
            <li><a href="admin4.php">Historial</a></li>
            <li class="active"><a href="#"><span class="glyphicon glyphicon-wrench"></span></a></li> 
            <li><a href="inicio.php">Salir</a></li>
            </ul>
        </div>
        </nav>

        
        <?php
                $query2="SELECT pnombre, foto, h.idusuario, mnombre, h.cantidad from historial h, marca m, producto p where p.idproducto=h.idproducto and m.idmarca=p.idmarca";
                $resultado2=mysqli_query($con,$query2);
                $numfilas=mysqli_num_rows($resultado2);
                

                echo "<span class='mtext-141 cl10'>";
                echo "Artículos Comprados:";
                echo "</span>";
                echo "</br>";
                echo "</br>";
                echo "<div class='row'>";
                echo "<div class='col-lg-10 col-xl-7 m-lr-auto m-b-50'>";
                echo "<div class='m-l-25 m-r--38 m-lr-0-x'>";
				echo "<div class='wrap-table-shopping-cart'>";
                
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


                ?>

                </center> 
    </div>
                
 
</html>
</body>


