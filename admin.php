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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/flor.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/admin.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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


     <div class="contenedor1">
     <h4>Modifique Productos Existentes</h4>
     <form role="form">
     <div class="form-group">
        <label for="nombre">Seleccione un Producto</label>
        <select class="form-control selectAltura" id="nombre" size="1px">
        <?php
          $query = mysqli_query($con,"SELECT idproducto, pnombre, mnombre from producto p, marca m where p.idmarca=m.idmarca");
          while ($valores = mysqli_fetch_array($query)) {
            echo "<option value='$valores[idproducto]'>$valores[idproducto] - $valores[pnombre]</option>";
          }
        ?>
      </select>
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
  




<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


    </body>
</html>