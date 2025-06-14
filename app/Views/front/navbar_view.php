<!-- Nav -->
<!--https://getbootstrap.com/docs/5.3/components/navbar/ bg adiciona background white-->
<nav class="navbar navbar-expand-lg body-tertiary my-bg-navBar"  data-bs-theme="light">
    <div class="container-fluid">
        <!-- Logo/marca incrustado en navbar -->
        <a class="navbar-brand" href="<?php echo base_url('principal')?>">
	 		<img src="<?php echo base_url('assets/imagenes/logo.reloj.png')?>" alt="marca" width="30" height="28" class="d-inline-block align-text-top">
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
	        		<a class="nav-link active" aria-current="page" href="principal">
						Inicio
					</a>
	     		</li>
				 <li class="nav-item">
					 <a class="nav-link active" href="acerca">
						 Acerca de eJoLR
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="quienes">
						Quiénes Somos
					</a>
				</li>
            	<li class="nav-item">
	       			<a class="nav-link active" href="registrar">
						Registrarse
					</a>
	     		</li>
            	<li class="nav-item">
	       			<a class="nav-link active" href="acceder">
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