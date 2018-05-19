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
<script type="text/javascript" src="js/jquery.js"> </script>

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

<div class="container">
<h4>Modifique Productos Existentes</h4>
<form role="form" action="admin2.php" method="GET">
<div class="form-group">
<label for="nombre">Seleccione un Producto</label>
<select class="form-control" id="nombre" name="producto" size="1px">
<option>Seleccione</option>
<?php
$query = mysqli_query($con,"SELECT idproducto, pnombre, mnombre from producto p, marca m where p.idmarca=m.idmarca");
while ($valores = mysqli_fetch_array($query)) {
echo "<option value='$valores[idproducto]'>$valores[idproducto] - $valores[pnombre]</option>";

}
?>
</select>
</div>
<button type="submit" class="btn btn-info">Aceptar</button>
</div>
</form>
</br>



<?php
     $producto=$_GET['producto'];
     $precio=$_POST['precio'];
     $cantidad=$_POST['cantidad']; 
     $producto2=$_GET['id'];
     

     $query = mysqli_query($con,"SELECT pnombre, mnombre, descripcion, foto, precio, cantidad  from producto p, marca m where p.idmarca=m.idmarca and p.idproducto='$producto';");
       
     while ($row = mysqli_fetch_array($query)) {
        echo "<h3> Producto a Modificar: </h3>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-hover table-striped table-condensed'>
        <tr>
        <th>Producto</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Precio</th>
        </tr>";


        echo "<tr>";
        echo "<td>";
        echo "<img src='img/".$row['foto']."' alt='IMG' width='100px'>";
        echo "</td>";
        echo "<td>" . $row['pnombre'] . "</td>";
        echo "<td>" . $row['mnombre'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "<td>" .$row['cantidad']. "</td>";
        echo "<td> $" .$row['precio']. "MX</td>";
        echo "</tr>";
   
     echo "</table>";
     echo "</div>";


     echo '<form action="admin2.php?id=' . $producto . '" method="post">
     <div class="form-group">
        <label for="cancion">Precio:</label><br>
        <input type="number" class="form-control" placeholder="Precio en Pesos" name="precio">
        </div>
        <div class="form-group">
        <label for="cancion">Cantidad en Stock :</label><br>
        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad">
        </div>

        <br>
     <div class="boton">
         <button type="submit" class="btn btn-primary">Modificar</button>
      <br><br>
    </div>
    </form>';

    
     }
    
    $query2 = mysqli_query($con,"UPDATE producto set precio='$precio', cantidad='$cantidad' where idproducto='$producto2';");
    if($producto2!=null){
        echo "<div class='alert alert-success fade in'>";
        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
        echo "<strong>";
        echo"Actualización Exitosa";
        echo"</strong>";
        echo "</div>";
    }
   ?>

</div>
</div>
</div>
</html>
</body>


