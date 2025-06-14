<!--div class="card-header my-header-style">
	Registro
</div-->

<!-- Formulario de registro -->
<!-- https://getbootstrap.com/docs/5.3/components/dropdowns/#accessibility -->
<!-- https://getbootstrap.com/docs/5.3/components/card/ -->
<div class="card mx-auto my-card-style1">
    <div class="dropdown m-4">
        <form>
            <!-- Solicitud Nombres y Apellidos -->
            <div class="row mb-3">
                <div class="col">
                    <label for="Name1" class="form-label fw-bold">
                        Nombres
                    </label>
                    <input type="name" class="form-control" id="Name1" placeholder="Nombres">
                </div>
                <div class="col">
                    <label for="Apellido1" class="col form-label fw-bold">
                        Apellidos
                    </label>
                    <input type="surname" class="form-control" id="Surname1" placeholder="Apellidos">
                </div>
            </div>
            <!-- Sexo -->
            <div class="row mb-3">
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
            </div>
            <!-- Solicitud del Tipo de Cuenta -->
            <div class="row mb-3">
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
            </div>
            <!-- Solicitud de Correo Electrónico -->
            <div class="row mb-3">
                <div class="col">
                    <label for="Email1" class="form-label fw-bold">
                        Correo Electrónico
                   </label>
                   <input type="email" class="form-control" id="Email1" placeholder="email@example.com">
                </div>
                <div class="col">
                    <label for="Email2" class="form-label fw-bold">
                        Repetir Correo Electrónico
                   </label>
                   <input type="email" class="form-control" id="Email2" placeholder="email@example.com">
                </div>
            </div>
            <!-- Solicitud de la Contraseña -->
            <div class="row mb-3">
                <div class="col">
                    <label for="Password1" class="form-label fw-bold">
                        Contraseña
                    </label>
                    <input type="password" class="form-control" id="Password1" placeholder="Contraseña">
                </div>
                <div class="col">
                    <label for="Password2" class="form-label fw-bold">
                        Repetir Contraseña
                    </label>
                    <input type="password" class="form-control" id="Password2" placeholder="Repetir Contraseña">
                </div>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                        ¿Accepta las Condiciones?
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Acceder</button>
            <button type="cancel" class="btn btn-danger">Cancelar</button>
        </form>
    </div>
</div>
<!-- End Formulario de registro -->