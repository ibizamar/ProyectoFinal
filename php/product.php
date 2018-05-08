
<!DOCTYPE html>
<html lang="en">
<head>


<?php
 $con = mysqli_connect("localhost","root","","perfumeria");

 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
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
									<a href="home-03.html">Inicio</a>
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
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<div class="wrap-icon-headers icon-header-item cl2 hov-cl1 trans-04 p-lr-11">
						    <a href="formulario.html"><i class="zmdi zmdi-account-o"></i></a>
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
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Todos los productos
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						Fragancias Dama
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Fragancias Caballero
					</button>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularity
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Average rating
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Newness
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$0.00 - $50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$50.00 - $100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$100.00 - $150.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$150.00 - $200.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$200.00+
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Black
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Blue
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Grey
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Green
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Red
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										White
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                            <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE  idproducto=1;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                <?php
                                    $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                    marca m WHERE p.idmarca=m.idmarca and idproducto=1;");
                                    $resultado=mysqli_fetch_array($query1);
                                    echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                                ?>
                                </div>
                                <span class="stext-105 cl3">
                                <?php
                                    $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=1;");
                                    $resultado=mysqli_fetch_array($query1);
                                    echo $resultado['descripcion'];
                                ?>
                                </span>
                                <span class="stext-105 cl3">
                                    $
                                <?php
                                    $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=1;");
                                    $resultado=mysqli_fetch_array($query1);
                                    echo $resultado['precio'];
                                ?>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=2;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=2;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=2;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=2;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=3;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=3;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=3;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=3;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=4;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=4;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=4;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=4;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=5;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=5;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=5;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=5;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=6;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=6;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=6;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=6;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=7;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=7;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=7;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=7;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=8;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=8;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=8;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=8;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=9;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=9;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=9;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=9;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=10;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=10;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=10;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=10;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=11;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=11;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=11;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=11;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=12;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=12;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=12;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=12;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=13;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=13;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=13;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=13;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=14;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=14;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=14;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=14;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=15;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=15;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=15;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=15;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=16;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=16;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=16;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=16;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=17;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=17;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=17;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=17;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>
            
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=18;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=18;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=18;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=18;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=19;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=19;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=19;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=19;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=20;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=20;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=20;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=20;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div> 
                
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=21;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=21;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=21;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=21;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=22;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=22;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=22;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=22;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div> 

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=23;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=23;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=23;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=23;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div> 
                
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=24;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=24;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=24;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=24;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=25;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=25;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=25;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=25;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>  
                
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=26;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=26;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=26;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=26;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>
                
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=27;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=27;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=27;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=27;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=28;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=28;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=28;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=28;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>   
            
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=29;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=29;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=29;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=29;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>    

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
                        <img src="img/<?PHP
                             $query1=mysqli_query($con,"SELECT foto FROM producto WHERE idproducto=30;");
                             $resultado=mysqli_fetch_array($query1);
                             echo $resultado['foto'];
                            ?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
                            <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php
                                $query1=mysqli_query($con,"SELECT pnombre, mnombre FROM producto p,
                                marca m WHERE p.idmarca=m.idmarca and idproducto=30;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['pnombre']. " - " .$resultado['mnombre'];
                            ?>
                            </div>
                            <span class="stext-105 cl3">
                            <?php
                                $query1=mysqli_query($con,"SELECT descripcion FROM producto where idproducto=30;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['descripcion'];
                            ?>
                            </span>
                            <span class="stext-105 cl3">
                                $
                            <?php
                                $query1=mysqli_query($con,"SELECT precio FROM producto where idproducto=30;");
                                $resultado=mysqli_fetch_array($query1);
                                echo $resultado['precio'];
                            ?>
                            </span>
							</div>
						</div>
					</div>
                </div>    

			</div>

			<!-- Load more -->

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