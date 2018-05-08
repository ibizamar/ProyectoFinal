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

<body style="height:1500px">


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
      <li><a href="#">Eliminar Productos</a></li>
      <li class="active"><a href="#"><span class="glyphicon glyphicon-wrench"></span></a></li> 
      <li><a href="inicio.php">Salir</a></li>
    </ul>
  </div>
</nav>

<div class="contenedor2">
    <h4>Agregar Productos a la Base de Datos</h4>
     <form role="form">
      <div class="form-group">
        <label for="nombre">Nombre del Producto:</label>
        <input type="email" class="form-control" id="email" placeholder="Nombre del Producto">
      </div>
      <div class="form-group">
        <label for="marca">Seleccione la Marca</label>
        <select class="form-control" id="nombre" size="1px">
        <?php
          $query = mysqli_query($con,"SELECT idmarca, mnombre from marca");
          while ($valores = mysqli_fetch_array($query)) {
          echo "<option value='$valores[idmarca]'>$valores[mnombre]</option>";
          }
        ?>
    </select>
      </div>
      <div class="form-group">
        <label for="descrpcion">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" placeholder="Descripción del Producto">
      </div>
      <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" id="precio" placeholder="Precio">
      </div>
      <div class="form-group">
        <label for="foto">Imagen</label>
        <input type="text" class="form-control" id="foto" placeholder="Nombre de la Imagen">
      </div>
      <div class="form-group">
        <label for="cantidad">Cantidad en Stock</label>
        <input type="number" class="form-control" id="precio" placeholder="Cantidad en Stock">
      </div>
      <button type="submit" class="btn btn-info">Agregar</button>
    </form>
  </div>
</div>
</div>
    


</html>
        </body>


