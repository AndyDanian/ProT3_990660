<!--div class="card-header my-header-style">
	Acceder
</div-->
<!-- Acceso -->
<!-- https://getbootstrap.com/docs/5.3/components/dropdowns/#accessibility -->
<!-- https://getbootstrap.com/docs/5.3/components/card/ -->
<div class="card mx-auto mb-5 my-card-style">
     <div class="dropdown m-4">
<!--Mensaje de Error-->
<?php if(session()->getFlashdata('msg')):?>
	<div class="alert alert-warning">
		<?= session()->getFlashdata('msg')?>
	</div>
<?php endif;?>
          <form method="post" action="<?php echo base_url('/enviarlogin');?>">
               <div class="row justify-content-md-center">
                    <div class="col-md-auto">
			 <img src="<?php echo base_url('assets/imagenes/email.jpeg');?>" alt="Bootstrap" width="30" height="28" class="d-inline-block align-text-top">
                    </div>
               </div>
               <div class="mb-3">
                    <label for="Email1" class="form-label fw-bold">
                         Correo Electrónico
                    </label>
                    <input name="email" type="text" class="form-control" id="Email1" placeholder="email@example.com">
               </div>
               <div class="mb-3">
                    <label for="Password1" class="form-label fw-bold">
                         Contraseña
                    </label>
                    <input name="pass" type="password" class="form-control" id="Password1" placeholder="Contraseña">
               </div>
               <div class="mb-3">
                    <div class="form-check">
                         <input type="checkbox" class="form-check-input" id="dropdownCheck">
                         <label class="form-check-label" for="dropdownCheck">
                              Recuérdeme
                         </label>
                    </div>
	       </div>
	       <input type="submit" value="Ingresar" class="btn btn-success">
	       <a href="<?php echo base_url('acceder');?>" class="btn btn-danger">Cancelar</a>
	       <br><span>¿Aún no se registró? <a href="<?php echo base_url('/registrar');?>">Registrarse aquí</a><span>
               <!--button type="submit" class="btn btn-primary">Acceder</button-->
               <!--button type="cancel" class="btn btn-danger">Cancelar</button-->
          </form>
     <div class="dropdown-divider"></div>
     <a class="dropdown-item" href="#">¿Olvido la contraseña?</a>
     </div>
</div>
<!-- End Acceso -->
