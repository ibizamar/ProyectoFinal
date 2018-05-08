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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
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


</head>

<body class="animsition">
				<!-- Header -->
				<header class="header-v2">
					<!-- Header desktop -->
					<div class="container-menu-desktop">
						<div class="wrap-menu-desktop">
							<nav class="limiter-menu-desktop container">
								
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
											<a href="product.php">Tienda</a>
										</li>
			
										<li>
											<a href="about.html">Acerca de</a>
										</li>
			
										<li>
											<a href="contact.html">Contacto</a>
										</li>
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
					<a href="home-03.html"><img src="img/logofleur2.png" alt="IMG-LOGO"></a>
				</div>
	
				<!-- Icon header -->
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>
	
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10">
					<a href="formulario.html"><i class="zmdi zmdi-account-o"></i></a>
					</div>
				
	
				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="main-menu-m">
					<li>
						<a href="inicio.php">Inicio</a>
					</li>
					<li>
						<a href="product.php">Tienda</a>
					</li>
	
					<!--<li>
						<a href="shoping-cart.html" class="label1 rs1" data-label1="Trendy!">Nuevo</a>
					</li>
	
					<li>
						<a href="blog.html">Regístrate</a>
					</li>-->
	
					<li>
						<a href="about.html">Acerca de</a>
					</li>
	
					<li>
						<a href="contact.html">Contacto</a>
					</li>
				</ul>
			</div>
	</header>
	
		<div class="user-modal">
		<div class="user-modal-container">
			<ul class="switcher">
				<li><a href="#0">Inicia Sesión</a></li>
				<li><a href="#0">Regístrate</a></li>
			</ul>

			<div id="login">
				<form class="form" action="formulario1.php" method="POST">
					<p class="fieldset">
						<label class="image-replace email" for="signin-email">Correo</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email"  name="mail" placeholder="Correo Electrónico">
						<span class="error-message">An account with this username does not exist!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace password" for="signin-password">Contraseña</label>
						<input class="full-width has-padding has-border" id="signin-password" type="password"  name="contrasena" placeholder="Contraseña">
						<a href="#0" class="hide-password">Mostrar</a>
						<span class="error-message">Wrong password! Try again.</span>
					</p>

					<p class="fieldset">
                    <button type="submit" class="btn btn-info" align="center">Inicia Sesión</button>
					</p>
                </form>

            <?php
            $mail = $_POST['mail'];
			$contrasena = $_POST['contrasena'];

			$mail1 = $_POST['mail'];
			$contrasena1 = $_POST['contrasena'];

			$adminmail = "admin@mail.com";
			$admincontra = "uadmin";

			if($mail1!=null && $mail1==$adminmail && $contrasena1==$admincontra){
			echo '<script>location.href="admin.php"</script>';
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
                echo "<div class='alert alert-danger fade in'>";
                echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                echo "<strong>Datos incorrectos</strong>";
                echo "</div>";
				}
			}
            ?>


            <p class="form-bottom-message"><a href="#0">Olvidaste tu contraseña?</a></p>
				<!-- <a href="#0" class="close-form">Close</a> -->
			</div>
                

				

			<div id="signup">
				<form class="form" action="formulario1.php" method="POST">  
					<p class="fieldset">
						<label class="image-replace username" for="signup-username">Nombre de Usuario</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" name="username" placeholder="Username">
						<span class="error-message">Your username can only contain numeric and alphabetic symbols!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" name="correo" type="email" placeholder="E-mail">
						<!--<span class="error-message">Ingrese un email válido</span>-->
					</p>

					<p class="fieldset">
						<label class="image-replace password" for="signup-password">Contraseña</label>
						<input class="full-width has-padding has-border" id="signup-password" type="password"  name="passwd" placeholder="Contraseña">
						<a href="#0" class="hide-password">Mostrar</a>
						<span class="error-message">La contraseña debe tener al menos 6 caracteres!</span>
					</p>

					<p class="fieldset">
							<label class="image-replace date" for="signup-date">Fecha de nacimiento</label>
							<input class="full-width has-padding has-border" id="signup-date" type="text" name="fecha" placeholder="Fecha de nacimiento (aaaa-mm-dd)">
					</p>

					<p class="fieldset">
							<label class="image-replace tarjeta" for="signup-tarjeta">Número de tarjeta bancaria</label>
							<input class="full-width has-padding has-border" id="signup-tarjeta" type="number" name="tarjeta" placeholder="Número Tarjeta Bancaria">
					</p>

					<p class="fieldset">
							<label class="image-replace direccion" for="signup-direccion">Dirección</label>
							<input class="full-width has-padding has-border" id="signup-direccion" type="text" name="direccion" placeholder="Dirección Postal">
					</p>

					<p class="fieldset">
                    <button type="submit" class="btn btn-info" align="center">Registrar</button>
					</p>
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

			


				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div>


			<div id="reset-password">
				<p class="form-message">Lost your password? Please enter your email address.</br> You will receive a link to create a new password.</p>

				<form class="form">
					<p class="fieldset">
						<label class="image-replace email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="error-message">An account with this email does not exist!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>


			

			<p class="form-bottom-message"><a href="#0">Inicie Sesión</a></p>
			</div>
			<a href="#0" class="close-form">Cerrar</a>
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/index.js"></script>



</body>

<?php
mysqli_close($con);
?>

</html>
