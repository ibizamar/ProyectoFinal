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

        <div class="jumbotron">
         <h1>Bienvenido Administrador</h1>
          <p>Realice modificaciones a la base de datos</p>
        </div>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Opciones de Administrador: </a>
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
            <li><a href="inicio.php">Salir</a></li>
            </ul>
        </div>
        </nav>

    <div class="contenedor2">
        <h3>Elimine un producto</h3>
            <form role="form" action="admin3.php" method="GET">
                <div class="form-group">
                <label for="nombre">Seleccione un Producto</label>
                <select class="form-control selectAltura" id="nombre" name="producto" size="1px">
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
    </div>

    </br>
    <div class="contenedor1">
    
    <?php
     $producto= $_GET['producto'];
     if($producto!=null){
     $query = mysqli_query($con,"SELECT pnombre, mnombre, descripcion, foto, precio  from producto p, marca m where p.idmarca=m.idmarca and p.idproducto='$producto';");
     echo "<h3> Producto Eliminado: </h3>";
     echo "<table class='table table-hover'>
        <tr>
        <th>Producto</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Descripcion</th>
        <th>Precio</th>
        </tr>";
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

     $query1 = mysqli_query($con,"DELETE from producto where idproducto='$producto';");
     $resultado = mysqli_query($con,$query); 
    }
   ?>
   </div>
   
</div>
 
</html>
</body>


