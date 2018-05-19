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

  <title>Fleur</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/flor.png"/>
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

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
<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->		
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>


</head>

<body class="animsition">
				<!-- Header -->
	<header class="header-v2">
	<!-- Header desktop -->
	<div class="container-menu-desktop trans-03">
		<div class="wrap-menu-desktop">
			<nav class="limiter-menu-desktop p-l-45">
				
				<!-- Logo desktop -->		
				<a href="#" class="logo">
					<img src="img/logofleur2.png" alt="IMG-LOGO">
				</a>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li>
							<a href="inicio.php">Inicio</a>
						</li>

						<li>
							<a href="productoprueba.php">Tienda</a>
						</li>

						<li>
							<a href="about.php">Acerca de</a>
						</li>

						<li>
							<a href="contact.php">Contacto</a>
						</li>
						
						<?php
						if(isset($_SESSION['username'])){
						echo "<li>";
						echo "<a href='informacion.php'>Bienvenido " .$_SESSION['username']. "</a>";
						echo "</li>";

						echo "<li>";
						echo "<a href='cerrar.php'>Cerrar Sesion</a>";
						echo "</li>";
						}
						?>    

					</ul>
				</div>	

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m">							
				<div class="wrap-icon-headers icon-header-item cl13 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
				<a href="carrito.php"><i class="zmdi zmdi-shopping-cart"></i></a>	
				</div>
				</div>
						
				<div class="flex-c-m h-full p-lr-19">
				<div class="wrap-icon-headers icon-header-item cl13 hov-cl1 trans-04 p-l-22 p-r-11">
				<a href="formulario1.php"><i class="zmdi zmdi-account-o"></i></a>
				</div>
				</div>
				</div>
			</nav>
			</div>
		</div>	

	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo moblie -->		
		<div class="logo-mobile">
			<a href="inicio.php"><img src="img/logofleur2.png" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon header -->
		
			<div class="flex-c-m h-full p-r-5">
				<div class="icon-header-item cl13 hov-cl1 trans-04 p-lr-11">
				<a href="carrito.php"><i class="zmdi zmdi-shopping-cart"></i></a>
				</div>
			</div>

			<div class="flex-c-m h-full p-r-5">
				<div class="icon-header-item cl13 hov-cl1 trans-04 p-lr-11">
				<a href="formulario1.php"><i class="zmdi zmdi-account-o"></i></a>
		</div>

		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>
	
	</div>

	<!-- Menu Mobile -->
	<div class="menu-mobile">
		<ul class="main-menu-m">
			<li>
				<a href="inicio.php">Inicio</a>
			</li>
			<li>
				<a href="productoprueba.php">Tienda</a>
			</li>
			<li>
				<a href="about.php">Acerca de</a>
			</li>

			<li>
				<a href="contact.php">Contacto</a>
			</li>

			<?php
						if(isset($_SESSION['username'])){
						echo "<li>";
						echo "<a href='informacion.php'>Bienvenido " .$_SESSION['username']. "</a>";
						echo "</li>";

						echo "<li>";
						echo "<a href='cerrar.php'>Cerrar Sesion</a>";
						echo "</li>";
						}
						?>    

		</ul>
	</div>
</header>



    <div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="jumbotron">
            <h3>Inicia Sesión</h3>
            <br>
    
            <form role="form" action="formulario1.php" method="POST">
            <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="email" class="form-control" name="mail" placeholder="Correo Electrónico">
            </div>

			<br>

			<p class="fieldset">
			<div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" id="signin-password" name="contrasena" placeholder="Contraseña">
			<a href="#0" class="hide-password">Mostrar</a>
            </div>
			</p>
			

			<br>
            <button type="submit" class="btn btn-ttc">Inicia Sesión</button>
        </form>

		<?php
            $mail = $_POST['mail'];
			$contrasena = $_POST['contrasena'];

			$mail1 = $_POST['mail'];
			$contrasena1 = $_POST['contrasena'];

			$adminmail = "admin@mail.com";
			$admincontra = "uadmin";

			if($mail1!=null && $mail1==$adminmail && $contrasena1==$admincontra){
			echo '<script>location.href="admin1.php"</script>';
			}

            else if($mail!=null && $mail!=$adminmail){
                $query="SELECT idusuario, unombre FROM usuarios WHERE mail = '$mail' and contrasena= '$contrasena'";
                $resultado = mysqli_query($con,$query); 
                $numfilas=mysqli_num_rows($resultado);
				$data = mysqli_fetch_array($resultado);

                if($numfilas>0){
                    echo "<div class='alert alert-success fade in'>";
                    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                    echo "<strong>";
                    echo"Bienvenido";
                    echo"</strong>";
                    echo "</div>";
                

                $_SESSION["idusuario"]=$data['idusuario'];
                $_SESSION["username"]=$data['unombre'];
				}
				
            	else{
			    echo "<br>";
                echo "<div class='alert alert-danger fade in'>";
                echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                echo "<strong>Datos incorrectos</strong>";
                echo "</div>";
				}
			}
            ?>
        </div>
        </div>

        <div class="col-sm-8">
        <div class="jumbotron">
            <h3>Registrate</h3>
			<br>
		
			<form role="form" action="formulario1.php" method="post">

            <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="username" placeholder="Nombre de Usuario">
            </div>

			<br>


			<div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="email" class="form-control" name="correo" placeholder="Correo Electrónico">
            </div>

			<br>


			<div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" name="passwd" placeholder="Contraseña">
            </div>


			<br>


			Fecha de nacimiento:
			<div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            <input type="date" class="form-control" name="fecha" placeholder="Fecha de Nacimiento">
            </div>

			<br>


			<div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
            <input type="number" class="form-control" name="tarjeta" placeholder="Número de Tarjeta Bancaria">
            </div>

			<br>


			<div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-plane"></span></span>
            <input type="text" class="form-control" name="direccion" placeholder="Dirección Postal">
            </div>

			<br>
            <button type="submit" class="btn btn-ttc">Regístrate</button>
			</form>

			<?php
					$usuario = $_POST['username'];
					$correo = $_POST['correo'];
					$contra = $_POST['passwd'];
					$fecha = $_POST['fecha'];
					$tarjeta = $_POST['tarjeta'];
					$direccion = $_POST['direccion']; 


					if($usuario!=null){
						$sql="INSERT INTO usuarios(unombre, mail, contrasena, fecha, tarjeta, direccion)
						 VALUES ('$usuario', '$correo', '$contra', '$fecha', '$tarjeta', '$direccion');";
						 $result = mysqli_query($con,$sql);


					 
						 echo "<div class='alert alert-success fade in'>";
						 echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
						 echo "<strong>";
						 echo"Registro Exitoso! Inicie Sesión para comprar";
						 echo"</strong>";
						 echo "</div>";
					 
					 }


					
				?>

			





        </div>
        </div>


    </div>
</div>
</BODY>
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
		$('.js-addwish-b2').on('click', function(e){
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
<!--===============================================================================================-->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/index.js"></script>
</HTML>
    
