<!--div class="card-header my-header-style">
	Registro
</div-->

<!-- Formulario de registro -->
<!-- https://getbootstrap.com/docs/5.3/components/dropdowns/#accessibility -->
<!-- https://getbootstrap.com/docs/5.3/components/card/ -->
<div class="card mx-auto my-card-style1">
    <div class="dropdown m-4">
<!-- desde la carpeta Config de CodeIgniter se utiliza el servicio de validation, es decir, que la 
validación se realiza desde CodeIgniter y se va aprovechar el servicio que ofrece este framework -->
<?php $validation = \Config\Services::validation(); ?>
<!-- El método post evita que se muestra la información en la barra del navegador.
/enviar-form es la ruta donde se envía los datos a procesar, esto se encuentra específicado
en app/Controllers/usuario_controller.php. 
-->
<form method="post" action="<?php echo base_url('/enviar-form') ?>">
	<?=csrf_field();?>
	<?=csrf_field();?>
	<!-- El Flashdata es para mostrat un mensaje de error o éxito. Entonces, las siguiente líneas de 
	    pho son de validación-->
	<?php if(!empty (session()->getFlashdata('fail'))):?>
	<div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
	<?php endif?>
	<?php if(!empty (session()->getFlashdata('success'))):?>
	<div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
        <?php endif?>
            <!-- Solicitud Nombres y Apellidos -->
            <div class="row mb-3">
                <div class="col">
                    <label for="Name1" class="form-label fw-bold">
                        Nombres
                    </label>
		    <input name="nombre" type="text" class="form-control" id="Name1" placeholder="Nombres">
		    <!-- Error -->
		    <?php if($validation->getError('nombre')) {?>
			<div class='alert alert-danger mt-2'>
				<?= $error = $validation->getError('nombre');?>
			</div>
		    <?php }?>
                </div>
                <div class="col">
                    <label for="Apellido1" class="col form-label fw-bold">
                        Apellidos
                    </label>
                    <input name="apellido" type="text" class="form-control" id="Surname1" placeholder="Apellidos">
		    <!-- Error -->
		    <?php if($validation->getError('apellido')) {?>
			<div class='alert alert-danger mt-2'>
				<?= $error = $validation->getError('apellido');?>
			</div>
		    <?php }?>
                </div>
            </div>
            <!-- Sexo -->
            <!--div class="row mb-3">
                <div class="col">
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">
                                Femenino
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">
                                Masculino
                            </label>
                        </div>
                    </div>
                </div>
            </div-->
            <!-- Solicitud del Tipo de Cuenta -->
            <!--div class="row mb-3">
                <button class="btn dropdown-toggle" type="button" id="dropdownButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Tipo Cuenta
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownButton">
                    <li><a class="dropdown-item" data-value="Novato">
                        Novato
                    </a></li>
                    <li><a class="dropdown-item" data-value="Ocasional">
                        Ocasional
                    </a></li>
                    <li><a class="dropdown-item" data-value="Coleccionista">
                        Coleccionista
                    </a></li>
                </ul>
            </div-->
            <!-- Solicitud de Correo Electrónico -->
            <div class="row mb-3">
                <div class="col">
                    <label for="Email1" class="form-label fw-bold">
                        Correo Electrónico
                   </label>
                   <input name="email" type="text" class="form-control" id="Email1" placeholder="email@example.com">
		    <!-- Error -->
		    <?php if($validation->getError('email')) {?>
			<div class='alert alert-danger mt-2'>
				<?= $error = $validation->getError('email');?>
			</div>
		    <?php }?>
                </div>
                <!--div class="col">
                    <label for="Email2" class="form-label fw-bold">
                        Repetir Correo Electrónico
                   </label>
                   <input name="email" type="text" class="form-control" id="Email2" placeholder="email@example.com">
		    !-- Error --
		    ?php if($validation->getError('email')) {?>
			<div class='alert alert-danger mt-2'>
				?= $error = $validation->getError('email');?>
			</div>
		    ?php }?>
                </div-->
            </div>
            <!-- Solicitud de Usuario -->
            <div class="row mb-3">
                <div class="col">
                    <label for="Usuario" class="form-label fw-bold">
                        Usuario
                   </label>
                   <input name="usuario" type="text" class="form-control" placeholder="usuario">
		    <!-- Error -->
		    <?php if($validation->getError('usuario')) {?>
			<div class='alert alert-danger mt-2'>
				<?= $error = $validation->getError('usuario');?>
			</div>
		    <?php }?>
                </div>
            </div>
            <!-- Solicitud de la Contraseña -->
            <div class="row mb-3">
                <div class="col">
                    <label for="Password1" class="form-label fw-bold">
                        Contraseña
                    </label>
                    <input name="pass" type="password" class="form-control" id="Password1" placeholder="Contraseña">
		    <!-- Error -->
		    <?php if($validation->getError('pass')) {?>
			<div class='alert alert-danger mt-2'>
				<?= $error = $validation->getError('pass');?>
			</div>
		    <?php }?>
                </div>
                <!--div class="col">
                    <label for="Password2" class="form-label fw-bold">
                        Repetir Contraseña
                    </label>
                    <input name="pass" type="password" class="form-control" id="Password2" placeholder="Repetir Contraseña">
		    !-- Error --
		    ?php if($validation->getError('pass')) {?>
			<div class='alert alert-danger mt-2'>
				?= $error = $validation->getError('pass');?>
			</div>
		    ?php }?>
                </div-->
            </div>
            <!--div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                        ¿Accepta las Condiciones?
                    </label>
                </div>
            </div-->
            <button type="submit" value="guardar" class="btn btn-primary">Acceder</button>
            <button type="cancel" value="cancelar" class="btn btn-danger">Cancelar</button>
        </form>
    </div>
</div>
<!-- End Formulario de registro -->
