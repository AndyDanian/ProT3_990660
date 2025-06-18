		<!--div class="card-header my-header-style">
			Inicio
		</div-->

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
					<img src="<?php echo base_url('assets/imagenes/reloj.mano.jpg');?>" class="d-block w-100"
					 width="1200px" height="630px">
					<div class="carousel-caption d-one d-md-block">
						<h4> Relojes Analógicos de Mano </h4>
					</div>
				</div>
				<div class="carousel-item mt-2">
				<img src="<?php echo base_url('assets/imagenes/reloj.bolsillo.jpeg');?>" class="d-block w-100" width="1200px" height="630px">
					<div class="carousel-caption d-one d-md-block">
					<h4> Relojes Analógicos de Bolsillo </h4>
				</div>
			  </div>
			  <div class="carousel-item mt-2">
			  <img src="<?php echo base_url('assets/imagenes/reloj.kuku.jpg');?>" class="d-block w-100"
					width="1200px" height="630px">
				  	<div class="carousel-caption d-one d-md-block">
					  <h4> Relojes Cucu (Encargo) </h4>
					</div>
				</div>
				<div class="carousel-item mt-5">
				<img src="<?php echo base_url('assets/imagenes/reloj.exterior.jpg');?>" class="d-block w-100">
					<div class="carousel-caption d-one d-md-block">
						<h4> Fabricamos Relojes para Exteriores (Encargo) </h4>
					</div>
				</div>
				<div class="carousel-item mt-5">
					<img src="<?php echo base_url('assets/imagenes/reloj.digital.jpg');?>" class="d-block w-100" width="1200px" height="630px">
					<div class="carousel-caption d-one d-md-block">
						<h4> Relojes Digitales de Mano </h4>
					</div>
				</div>
				<div class="carousel-item mt-5">
				<img src="<?php echo base_url('assets/imagenes/reloj.smart.jpg');?>" class="d-block w-100" 
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

