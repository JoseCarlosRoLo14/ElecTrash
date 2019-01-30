<?php
    session_start();
    if(!isset($_SESSION['logueado'])){
        session_unset();
        session_destroy();
        header('Location:login.html');
    }else{  
        alert("Bienvenido");
    }    
    
?> 
   
<html lang="en">
<head>
<title>ElecTrash</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/icono.png" />
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
                    <a href="index.html"><img style="width: 275px" src="images/logo_color.png" alt=""></a>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="nosotros.html">nosotros</a></li>
						<li class="main_nav_item">
                            <a href="#">r a e e</a>
                            <ul>
                                <li><a href="raee.html">Qu&eacute; es&#63;</a></li>
                                <li><a href="ayuda.html">C&oacute;mo puedes ayudar&#63;</a></li>
                            </ul>
                        </li>
                                <li class="main_nav_item">
                            <a href="#">compra/venta</a>
                                    <ul>
                                        <li><a href="compras.html">Comprar</a></li>
                                        <li><a href="ventas.html">Vender</a></li>
                                    </ul>
                                </li>
				<li class="main_nav_item">
                            <a href="news.html">socios</a>
                            <ul>
                                <li><a href="empresas.html">Empresas</a></li>
                                <li><a href="empleados.html">Empleados</a></li>
                            </ul>
                        </li>
						<li class="main_nav_item"><a href="contacto.html">contacto</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/icoin.png" alt="">
            <span><a href="registro.html">Regístrate</a></span><span>|</span><span><a href="login.html">Inicia Sesión</a></span>            
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>
        
	</header>
    
    
    
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="nosotros.html">nosotros</a></li>
					<li class="menu_item menu_mm"><a href="raee.html">Qu&eacute; es la raee&#63;</a></li>
					<li class="menu_item menu_mm"><a href="ayuda.html">C&oacute;mo puedes ayudar&#63;</a></li>
					<li class="menu_item menu_mm"><a href="compras.html">Comprar</a></li>
					<li class="menu_item menu_mm"><a href="ventas.html">vender</a></li>
					<li class="menu_item menu_mm"><a href="empresas.html">empresa</a></li>
                    <li class="menu_item menu_mm"><a href="empleados.html">empleado</a></li>
                    <li class="menu_item menu_mm"><a href="contacto.html">contacto</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">All rights reserved | Team ElecTrash EC</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background1.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Recicla <span> tus Residuos</span>  Electr&oacute;nicos&#33;</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background1.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Recicla <span> tus Residuos</span>  Electr&oacute;nicos&#33;</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background1.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Recicla <span> tus Residuos</span>  Electr&oacute;nicos&#33;</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">ant.</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">sig.</span></div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/icores.png" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Qu&eacute; esperas  para publicar tu art&iacute;culo&#63;</h2>
								<a href="courses.html" class="hero_box_link">Ver m&aacute;s..</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/icoven.png" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Vender o Comprar&#63;</h2>
								<a href="courses.html" class="hero_box_link">Ver m&aacute;s..</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/icoemp.png" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">&Uacute;nete y trabaja con nosotros&#33;</h2>
								<a href="teachers.html" class="hero_box_link">Ver m&aacute;s..</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Nuestro Objetivo</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/recicla.png" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Ay&uacute;danos a Reciclar!</a></div>
							<div class="card-text">Publica los art&iacute;culos que quieras reciclar..</div>
						</div>
						<!--div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Jos&eacute; C. Rodr&iacute;guez, <span>Gu&iacute;a</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>Ir</span></div>
						</div-->
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/reduce.png" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Trabajemos para Reducir</a></div>
							<div class="card-text">Incr&iacute;bete y trabaja con nosotros..</div>
						</div>
						<!--div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Kevin Flores, <span>Gu&iacute;a</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>Ir</span></div>
						</div-->
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/reutiliza.png" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Porqu&eacute; no reutilizar&#63;</a></div>
							<div class="card-text">Revisa la lista de art&iacute;culos disponibles..</div>
						</div>
						<!--div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Boris Hern&aacute;ndez, <span>Gu&iacute;a</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>Ir</span></div>
						</div-->
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Register -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Reg&iacute;strate&#33; <span> Que esperas&#33;</span> S&eacute; parte de nosotros&#33;</h1>
							<p class="register_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempo.</p>
							<div class="button button_1 register_button mx-auto trans_200"><a href="#">Reg&iacute;strate&#33;</a></div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_content text-center">
							<h1 class="search_title">M&aacute;s Informaci&oacute;n&#63;</h1>
							<form id="search_form" class="search_form" action="post">
								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Nombre" required="required" data-error="Campo requerdido">
								<input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Apellido" required="required" data-error="Campo requerdido">
								<input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Correo" required="required" data-error="Campo requerdido">
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Enviar</button>
							</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Services

	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Nuestros Servicios</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/earth-globe.svg" alt="">
					</div>
					<h3>Registrate como Cliente</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/exam.svg" alt="">
					</div>
					<h3>Publica tu articulo</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/books.svg" alt="">
					</div>
					<h3>Registrate como empleado</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/professor.svg" alt="">
					</div>
					<h3>Trabaja con nosotros</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/blackboard.svg" alt="">
					</div>
					<h3>Registra tu empresa</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/mortarboard.svg" alt="">
					</div>
					<h3>Ayudanos con esta causa</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

			</div>
		</div>
	</div-->

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
				<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<a href="index.html"><img style="width: 175px" src="images/logo_wh.png" alt=""></a>
							</div>
						</div>

						<p class="footer_about_text">Un equipo de superación, innovación y motivación.. Trabajamos por ti y por el mundo!</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Nosotros</a></li>
                                <li class="footer_list_item"><a href="#">Cliente</a></li>
								<li class="footer_list_item"><a href="courses.html">Empleado</a></li>
								<li class="footer_list_item"><a href="news.html">Empresa</a></li>
								<li class="footer_list_item"><a href="contact.html">Contacto</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Team ElecTrash</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">José C. Rodríguez</a></li>
								<li class="footer_list_item"><a href="#">Andrea Barragán</a></li>
								<li class="footer_list_item"><a href="#">Mishell Pincay</a></li>
								<li class="footer_list_item"><a href="#">Eddy Chávez</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contacto</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/icoubi.png" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Riobamba - Chimborazo - Ecuador
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/icocel.png" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									+593 98 000 1508
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/icomail.png" alt="https://www.flaticon.com/authors/lucy-g">
									</div>electrasec@gmail.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright ElecTrash&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Team ElecTrash EC</span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
