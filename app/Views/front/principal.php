<!-- https://getbootstrap.com/docs/5.3/getting-started/introduction/ -->
<!DOCTYPE html>
<html lang="es">
	<head>
		<!--Siguiente Etiqueta: Identifica el tipo caracteres a utilizar-->
		<meta charset="utf-8">
		<!-- Definición viewport por medio etiqueta meta-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Nombre en la pestaña del navegador -->
		<title>eJoLReS</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/miestilos.css">
	</head>
	
	<body class="p-1">
	<!-- 
    wrapper and content son necesarios para mantener al footer en la parte
    inferior de la pagina
    -->
	<div class="wrapper">
        <main class="content">
		<!-- https://getbootstrap.com/docs/5.3/components/card/#header-and-footer -->
		<div class="card-header my-header-style">
			Inicio
		</div>

		<!-- Nav -->
		<!--https://getbootstrap.com/docs/5.3/components/navbar/ bg adiciona background white-->
		<nav class="navbar navbar-expand-lg body-tertiary my-bg-navBar"  data-bs-theme="light">
	  	    <div class="container-fluid">
	            <!-- Logo/marca incrustado en navbar -->
	            <a class="navbar-brand" href="#">
			 		<img src="assets/imagenes/logo.reloj.png" alt="Bootstrap" width="30" height="28" class="d-inline-block align-text-top">
			 		eJoLR
		       	</a>
				<!-- Boton para el colapso por el tamaño de pantalla -->
			   	<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" 	aria-label="Toggle navigation">
			   		<span class="navbar-toggler-icon"></span>
			   	</button>
			   	<!-- Paginas -->
				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				   	<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="offcanvasNavbarLabel">eJoLR</h5>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
		            <ul class="navbar-nav justify-content flex-grow-1 pe-3">
		            	<li class="nav-item">
			        		<a class="nav-link active" aria-current="page" href="principal.html">
								Inicio
							</a>
			     		</li>
						 <li class="nav-item">
							 <a class="nav-link active" href="assets/subpaginas/acerca.html">
								 Acerca de eJoLR
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="assets/subpaginas/quienes.html">
								Quiénes Somos
							</a>
						</li>
		            	<li class="nav-item">
			       			<a class="nav-link active" href="assets/subpaginas/registrar.html">
								Registrarse
							</a>
			     		</li>
		            	<li class="nav-item">
			       			<a class="nav-link active" href="assets/subpaginas/acceder.html">
								Acceder
							</a>
			     		</li>
		            	<li class="nav-item">
	                	    <a class="nav-link disabled fw-bold" aria-disabled="true">  
								ReLoJ <-> PuNTuaLiDaD 
							</a>
	                	</li>
		        	</ul>
	            </div>
		       <!-- botón de buscar -->
		       <form class="d-flex mt-3" role="search">
	                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
	                  <button class="btn btn-dark" type="submit">Buscar</button>
	               </form>
	  	    </div>
		</nav>
		<!-- End Nav -->

		<!-- Carousel -->
		<!-- https://getbootstrap.com/docs/5.3/components/carousel/ -->
		<!-- data-bs-="carousel" autoplay -->
		<div class="d-flex justify-content-center">
			<div id="carouselRelojes" class="carousel slide" data-bs-ride="carousel">
				<!-- 
				Indicador de imagen centrado en la parte inferior de las imagenes 
				id del anterior div como data-bs-target de los button tienen que
				ser los mismos, para que cumplan su funcionalidad
			-->
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselRelojes" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselRelojes" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselRelojes" data-bs-slide-to="2" aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carouselRelojes" data-bs-slide-to="3" aria-label="Slide 4"></button>
				<button type="button" data-bs-target="#carouselRelojes" data-bs-slide-to="4" aria-label="Slide 5"></button>
				<button type="button" data-bs-target="#carouselRelojes" data-bs-slide-to="5" aria-label="Slide 6"></button>
			</div>
			<!-- Imagenes -->
			<div class="carousel-inner">
				<div class="carousel-item mt-5 active">
					<img src="assets/imagenes/reloj.mano.jpg" class="d-block w-100"
					 width="1200px" height="630px">
					<div class="carousel-caption d-one d-md-block">
						<h4> Relojes Analógicos de Mano </h4>
					</div>
				</div>
				<div class="carousel-item mt-2">
					<img src="assets/imagenes/reloj.bolsillo.jpeg" class="d-block w-100" width="1200px" height="630px">
					<div class="carousel-caption d-one d-md-block">
					<h4> Relojes Analógicos de Bolsillo </h4>
				</div>
			  </div>
			  <div class="carousel-item mt-2">
				  	<img src="assets/imagenes/reloj.kuku.jpg" class="d-block w-100"
					width="1200px" height="630px">
				  	<div class="carousel-caption d-one d-md-block">
					  <h4> Relojes Cucu (Encargo) </h4>
					</div>
				</div>
				<div class="carousel-item mt-5">
					<img src="assets/imagenes/reloj.exterior.jpg" class="d-block w-100">
					<div class="carousel-caption d-one d-md-block">
						<h4> Fabricamos Relojes para Exteriores (Encargo) </h4>
					</div>
				</div>
				<div class="carousel-item mt-5">
					<img src="assets/imagenes/reloj.digital.jpg" class="d-block w-100" width="1200px" height="630px">
					<div class="carousel-caption d-one d-md-block">
						<h4> Relojes Digitales de Mano </h4>
					</div>
				</div>
				<div class="carousel-item mt-5">
					<img src="assets/imagenes/reloj.smart.jpg" class="d-block w-100" 
					width="1200px" height="630px">
					<div class="carousel-caption d-one d-md-block">
						<h4> Relojes Inteligentes de Mano </h4>
					</div>
				</div>
			</div>
			<!-- Botones para avanzar o retroceder en el carousel -->
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselRelojes" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselRelojes" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
		<!-- End Carousel -->
	</main>
		<!-- End container -->

		<!-- Footer -->
		<div class="card-footer text-center my-footer-style">
			<a href="https://www.instagram.com/" class="btn">
				<img src="assets/imagenes/IG.png" alt="Bootstrap" width="20" height="20" class="d-inline-block align-text-top">
			</a>
			<a href="https://www.facebook.com/" class="btn">	
				<img src="assets/imagenes/FB.png" alt="Bootstrap" width="20" height="20" class="d-inline-block align-text-top">
			</a>
			<a href="https://ar.pinterest.com/" class="btn">
				<img src="assets/imagenes/PR.png" alt="Bootstrap" width="30" height="30" class="d-inline-block align-text-top">
			</a>
			<div>
				San Juan con Pelligrini 321  |
				relojes@email.com  |
				379 0 00 00 11
			</div>
			<div>Derechos de Autor &copy; | 2025 eJoLR </div>
		</div>
		<!-- End Footer -->

		<!-- JS necesario para el carousel-autoplay-->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
	</div>
	<!-- End wrapper -->
	</body>
</html>