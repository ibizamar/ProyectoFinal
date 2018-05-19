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
 error_reporting(0);



?>
	<title>Confirmacion</title>
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
<link href='https://fonts.googleapis.com/css?family=Suravaram' rel='stylesheet'>
<!--===============================================================================================-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!--===============================================================================================-->
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>


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
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
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

	<div class="container">
    <div class="well">
        ¡Su compra se registro exitosamente!
					<br>
       Gracias por comprar con Fleur

    </div>

                </br>
                </br>


        
            <?php
            if(isset($_SESSION['username'])){
				$idusuario = $_SESSION["idusuario"];
				
                $query="SELECT p.idproducto, pnombre, precio, c.cantidad, foto from producto p, carrito c where c.idusuario=$idusuario and p.idproducto=c.idproducto;";
				$resultado=mysqli_query($con,$query);

				$query2="SELECT * from carrito where idusuario=$idusuario;";
                $resultado2=mysqli_query($con,$query2);
				$numfilas=mysqli_num_rows($resultado2);

				if($numfilas==0){
					echo "<div class='alert alert-danger fade in'>";
					echo "<a href='#' class='close' data-dismiss='alert'></a>";
					echo "<strong>Carrito Vacío</strong>";
					echo "</div>";
				}
				else{
                echo "<span class='mtext-141 cl10'>";
                echo "<center>Artículos Adquiridos:</center>";
                echo "</span>";
                echo "</br>";
                echo "</br>";
                //echo "<div class='row'>";
                //echo "<div class='col-lg-10 col-xl-7 m-lr-auto m-b-50'>";
                //echo "<div class='m-l-25 m-r--38 m-lr-0-x'>";
				//echo "<div class='wrap-table-shopping-cart'>";
				
				echo "<table class='table table-hover table-responsive'>";
                echo "<tr class='table_head'>";
				echo "<th class='column-1'>Producto</th>";
				echo "<th class='column-1'>Nombre</th>";
				echo "<th class='column-2'>Precio</th>";
                echo "<th class='column-4'>Cantidad</th>";
				echo "<th class='column-5'>Total</th>";
				echo "<th class='column-3'></th>";
				echo "</tr>";
	
				
					$cont=0;
					$cont2=0;
					$cantidad=0;
                    $total=0;
                    $total1=0;
                    

					while($row = mysqli_fetch_array($resultado)){
				      
					  echo "<tr>";
					  echo "<td>";
					  echo "<img src='img/".$row['foto']."' alt='IMG' width='100px'>";
					  echo "</td>";
                      echo "<td>" .$row['pnombre']. "</td>";
                      echo "<td>" . $row['precio'] . "</td>";
                      echo "<td>" . $row['cantidad'] . "</td>";
					  echo "<td> $" . $total=($row['cantidad']*$row['precio']). "MX</td>";
					  echo "</tr>";
					  
					  $cantidad+=$row['cantidad'];
                      $total1+=($row['cantidad']*$row['precio']);

					  

					}  
                    echo "</table>";



                echo "<div class='flex-w flex-t bor12 p-b-13'></div>";
						echo "<div class='flex-w flex-t p-t-27 p-b-33'>";
						echo "<div class='size-208'>";
						echo "<span class='mtext-140 cl10'>";
                        echo "Total:";
						echo "</span>";
						echo "</div>";
						echo "<div class='size-209 p-t-1'>";
						echo "<span class='mtext-140 cl10'>";
						echo "$";
						echo $total1;
						echo " MX";
						echo "</span>";
						echo "</div>";
						echo "</div>";
                        echo "</div>";

        
					

                        while($row1 = mysqli_fetch_array($resultado2)){
                        $cant=$row1['cantidad'];
                        $prod=$row1['idproducto'];
                        $us=$row1['idusuario'];
                        $sql="INSERT INTO historial(idproducto, idusuario, cantidad)
						VALUES ('$prod','$us','$cant');";
						$result = mysqli_query($con,$sql);
                        }  

                        $sql1="DELETE FROM carrito where idusuario=$idusuario;";
						$result = mysqli_query($con,$sql1);

						echo '<div class="botonete1">';
						echo '<form action="inicio.php">';
						echo '<button class="btn botoncillo">Regresar</button>';
						echo '</form>';
						echo '</div>';
             


			}
		}
            ?>
            



</div>
	    </div>
		</div>
		</div>
        </div>
        </div>
	</div>
    





	</br>
	</br>
	</br>


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
				</div>
			</div>
		</div>
	</div>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
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