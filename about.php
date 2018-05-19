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
<!--===============================================================================================-->
<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>
<!--===============================================================================================-->
<!--===============================================================================================-->
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<!--===============================================================================================-->

</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v3">
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

	

	


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('img/fondito3.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Acerca de Nosotros
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Nuestra Historia
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Pensamos que una de las cartas de presentación más importante para todos nosotros, es nuestro aroma
						</p>

						<p class="stext-113 cl6 p-b-26">
							Por eso mismo, estamos comprometidos con brindale a todos nuestros clientes, fragancias que puedan ser arte de su día a día y que les brinden una sencación única						</p>

						<p class="stext-113 cl6 p-b-26">
							Tiene alguna pregunta? Háganoslo Saber at 8th floor, 379 Hudson St, New York, NY 10018 o llámenos al (+1) 96 716 6879
						</p>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="img/fotito1.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Nuestra misión
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Brindarle a nuestros clientes la mejor gama de fragancias, con la mejor calidad.
						</p>

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
								La calidad nos define, perfumamos tu vida.
							</p>

							<span class="stext-111 cl8">
								- Fleur
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="img/fotito2.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
		

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


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
<span class="symbol-btn-back-to-top">
    <i class="zmdi zmdi-chevron-up"></i>
</span>
</div>

<!-- Modal1 -->
<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
<div class="overlay-modal1 js-hide-modal1"></div>

<div class="container">
    <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
        <button class="how-pos3 hov3 trans-04 js-hide-modal1">
            <img src="images/icons/icon-close.png" alt="CLOSE">
        </button>

        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                        <div class="slick3 gallery-lb">
                            <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="item-slick3" data-thumb="images/product-detail-02.jpg">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="item-slick3" data-thumb="images/product-detail-03.jpg">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        Lightweight Jacket
                    </h4>

                    <span class="mtext-106 cl2">
                        $58.79
                    </span>

                    <p class="stext-102 cl3 p-t-23">
                        Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                    </p>
                    
                    <!--  -->
                    <div class="p-t-33">
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-203 flex-c-m respon6">
                                Size
                            </div>

                            <div class="size-204 respon6-next">
                                <div class="rs1-select2 bor8 bg0">
                                    <select class="js-select2" name="time">
                                        <option>Choose an option</option>
                                        <option>Size S</option>
                                        <option>Size M</option>
                                        <option>Size L</option>
                                        <option>Size XL</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-203 flex-c-m respon6">
                                Color
                            </div>

                            <div class="size-204 respon6-next">
                                <div class="rs1-select2 bor8 bg0">
                                    <select class="js-select2" name="time">
                                        <option>Choose an option</option>
                                        <option>Red</option>
                                        <option>Blue</option>
                                        <option>White</option>
                                        <option>Grey</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>

                                    <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>

                                <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
                            </div>
                        </div>	
                    </div>

                    <!--  -->
                    <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                        <div class="flex-m bor9 p-r-10 m-r-11">
                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                <i class="zmdi zmdi-favorite"></i>
                            </a>
                        </div>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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