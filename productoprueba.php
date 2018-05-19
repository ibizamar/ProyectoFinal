
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
	<title>Tienda</title>
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
</head>


<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Envío gratis a partir de $3000 MX
					</div>
				</div>
			</div>

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
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10">
				<a href="carrito.php"><i class="zmdi zmdi-shopping-cart"></i></a>	
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10">
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
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Envío gratis a partir de los $3000 MX
					</div>
				</li>
			</ul>

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
	
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1">
						Bienvenido al Catálogo
					</button>
				</div>
			</div>
           
            
   
	
			<div class="row isotope-grid">
            <?php
                $query1=mysqli_query($con,"SELECT foto, idproducto, mnombre, pnombre, descripcion, precio  FROM producto p, marca m  WHERE  p.idmarca=m.idmarca;");
                while($row=mysqli_fetch_array($query1)){
                    echo '';
                    echo '<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">';
                    echo    '<div class="block2">';
                    echo        '<div class="block2-pic hov-img0">';
                    echo        '<img src="img/'.$row['foto']. '" alt="IMG-PRODUCT">';
                    echo        '<a class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" href="carrito.php?id=' .$row['idproducto']. '">';
                    echo        'Add to Cart';
                    echo        '</a>';
                    echo        '</div>';

                    echo '<div class="block2-txt flex-w flex-t p-t-14">';
                    echo    '<div class="block2-txt-child1 flex-col-l ">';
                    echo        '<div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">';
                    echo        $row['pnombre']. " - " .$row['mnombre'];
                    echo        '</div>';
                    echo        '<span class="stext-105 cl3">';
                    echo        $row['descripcion'];
                    echo        '</span>';
                    echo        '<span class="stext-105 cl3">';
                    echo        '$';
                    echo        $row['precio'];
                    echo        '</span>';
                    echo    '</div>';
                    echo  '</div>';
                    echo '</div>';
                    echo '</div>';
                    

                    
                }
                ?>
        </div>
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
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Suscríbete
							</button>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script>All rights reserved | This page is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Mariela Ricardez
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