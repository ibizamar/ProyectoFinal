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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/flor.png"/>
<!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
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


        <h3>Elimine un producto</h3>
            <form role="form" action="admin3.php" method="GET">
                <div class="form-group">
                <label for="nombre">Seleccione un Producto</label>
                <select class="form-control" id="nombre" name="producto" size="1px">
                <?php
                $query = mysqli_query($con,"SELECT idproducto, pnombre, mnombre from producto p, marca m where p.idmarca=m.idmarca");
                while ($valores = mysqli_fetch_array($query)) {
                echo "<option value='$valores[idproducto]'>$valores[idproducto] - $valores[pnombre]</option>";
                }
                ?>
                </select>
                </div>
            <button type="submit" class="btn btn-info">Eliminar</button>
            </form>



    <?php
     $producto= $_GET['producto'];
     if($producto!=null){
     $query = mysqli_query($con,"SELECT pnombre, mnombre, descripcion, foto, precio  from producto p, marca m where p.idmarca=m.idmarca and p.idproducto='$producto';");
     echo "<h3> Producto Eliminado: </h3>";
     echo "<div class='table-responsive'>";
     echo "<table class='table table-hover table-responsive'>";
     echo "<tr class='table_head'>";
     echo "<th class='column-1'>Producto</th>";
     echo "<th class='column-1'>Nombre</th>";
     echo "<th class='column-2'>Marca</th>";
     echo "<th class='column-4'>Descripcion</th>";
     echo "<th class='column-5'>Precio</th>";
     echo "<th class='column-3'></th>";
     echo "</tr>";
     while ($row = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>";
        echo "<img src='img/".$row['foto']."' alt='IMG' width='100px'>";
        echo "</td>";
        echo "<td>" . $row['pnombre'] . "</td>";
        echo "<td>" . $row['mnombre'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "<td> $" .$row['precio']. "MX</td>";
        echo "</tr>";
     }
     echo "</table>";
     echo "</div>";

     $query1 = mysqli_query($con,"DELETE from producto where idproducto='$producto';");
     $resultado = mysqli_query($con,$query); 
    }
   ?>

</div>
 
</html>
</body>


