<!DOCTYPE html>
<html lang="en">
<head>
<?php
$con = mysqli_connect("localhost","root","","perfumeria");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

session_start();

?>

	<title>Fleur</title>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/info.css">
<!--===============================================================================================-->
<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>
<!--===============================================================================================-->
<!--===============================================================================================-->
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<!--===============================================================================================-->

</head>
<body class="animsition">

<!-- Header -->
<header class="header-v4">
<!-- Header desktop -->
<div class="container-menu-desktop">

    <div class="wrap-menu-desktop how-shadow1">
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

                <div class="wrap-icon-headers icon-header-item cl13 hov-cl1 trans-04 p-lr-11">
                    <a href="formulario1.php"><i class="zmdi zmdi-account-o"></i></a>
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
	   <div class="icon-header-item cl13 hov-cl1 trans-04 p-lr-11 p-l-10">
	    <a href="carrito.php"><i class="zmdi zmdi-shopping-cart"></i></a>
        </div>

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



	<div class="col-sm-12">
    	<div class="jumbotron jumbotron1">
    	Información de usuario
		</div>
	<div>
    <?php
     $idusuario = $_SESSION["idusuario"];
     $query="SELECT unombre, mail, tarjeta, fecha, direccion FROM usuarios WHERE idusuario ='$idusuario'";
     $resultado = mysqli_query($con,$query);
     $data = mysqli_fetch_array($resultado);
     
    ?> 
   

	<div class="jumbotron jumbotron2">
	<div class="container">
    <h4>Nombre:<h4>
        <h5><?php echo $data['unombre']; ?></h5>
        <br>
        <br>
        <h4>Correo Electrónico:<h4>
        <h5><?php echo $data['mail']; ?></h5>
        <br>
        <br>
        <h4>Fecha de Nacimiento:<h4>
        <h5><?php echo $data['fecha']; ?></h5>
        <br>
        <br>
        <h4>Número de Tarjeta:<h4>
        <h5><?php echo $data['tarjeta']; ?></h5>
        <br>
        <br>
        <h4>Dirección:<h4>
        <h5><?php echo $data['direccion']; ?></h5>
        <br>
        <br>
	</div>
	</div>



       













<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categorías
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Damas
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Caballeros
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Ayuda
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Contáctanos
					</h4>

					<p class="stext-107 cl7 size-201">
						¿Preguntas? <br> llámanos al (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Lo mejor en perfumería
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
						      <img src="img/logofleur2.png" alt="IMG-LOGO" width="70">
							<!--<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">-->
							<!--<div class="focus-input1 trans-04"></div0-->
						</div>

						<div class="p-t-18">
							<!--<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Suscríbete
							</button>-->
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This page is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Mariela Ricardez
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
</footer>




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
</body>
</html>





