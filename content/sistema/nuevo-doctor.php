<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1;?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades/dermatologia"><i class="fa fa-arrow-left small me-1"></i> Dermatología</a>
			</div>
		</div>
	</div>
</section>
<img src="<?php echo $page_image;?>" class="img-fluid mt-n5 d-block d-md-none" alt="<?php echo $h1;?>">
<section class="fondo-azul content-space-3 d-none d-md-block">
	<div class="container pt-3 mb-n5">
		<div class="row position-relative">
			<div class="position-md-absolute top-0 col-md-7 offset-md-5 h-100">
				<div class="bg-img-center card-img">
					<img class="img-fluid rounded-3" style="height:400px !important" src="/images/nosotros.jpg">
				</div>
			</div>
			<div class="col-10 col-md-7 col-lg-6 offset-1 offset-md-0 content-space-md-1">
				<div class="position-relative fondo-celeste-bajo rounded-3 zi-1 p-6 mt-5 mb-5 pe-6  shadow-sm">
					<div class="mb-2 mt-5">
						<h1 class="h4 color-azul"><?php echo $h1;?></h1>
					</div>
					<div class="mb-5">
						<a class="link color-azul color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades/dermatologia"><i class="fa fa-arrow-left small me-1"></i> Dermatología</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="py-5">
    <div class="container my-5">
        <h1 class="text-center">Registrar Nuevo Doctor</h1><form action="/sistema/subir-nuevo-doctor" method="POST" enctype="multipart/form-data">
    <div class="row g-3">
        <!-- Información Básica -->
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombres</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="paterno" class="form-label">Apellido Paterno</label>
            <input type="text" name="paterno" id="paterno" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="materno" class="form-label">Apellido Materno</label>
            <input type="text" name="materno" id="materno" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="especialidad" class="form-label">Especialidad</label>
            <select name="especialidad" id="especialidad" class="form-select" required>
                <option value="">Seleccionar</option>
                <!-- Especialidades dinámicas -->
                <?php include 'lista_especialidades.php'; ?>
            </select>
        </div>
        <div class="col-md-4">
            <label for="cmp" class="form-label">CMP</label>
            <input type="text" name="cmp" id="cmp" class="form-control" maxlength="5" required>
        </div>
        <div class="col-md-4">
            <label for="rne" class="form-label">RNE</label>
            <input type="text" name="rne" id="rne" class="form-control" maxlength="5">
        </div>
        <div class="col-md-4">
            <label for="sexo" class="form-label">Sexo</label>
            <select name="sexo" id="sexo" class="form-select" required>
                <option value="1">Femenino</option>
                <option value="2">Masculino</option>
            </select>
        </div>
        <!-- Horarios -->
        <div class="col-md-12">
            <h3>Horarios</h3>
            <p class="text-muted">Especifica los horarios de atención. Puedes dejar en blanco si no atiende un día específico.</p>
        </div>
        <?php
        $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        foreach ($dias as $dia) {
            $dia_lower = strtolower($dia);
        ?>
        <div class="col-md-12">
            <label class="form-label"><?php echo $dia; ?></label>
            <div class="row align-items-center">
                <div class="row">
                    <div class="col-md-2 text-center">
                        <input type="checkbox" id="<?php echo $dia_lower; ?>_previa" name="<?php echo $dia_lower; ?>_previa" 
                            class="form-check-input previa-cita" data-day="<?php echo $dia_lower; ?>">
                        <label for="<?php echo $dia_lower; ?>_previa" class="form-check-label">Previa Cita</label>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="time" name="<?php echo $dia_lower; ?>_inicio_m" id="<?php echo $dia_lower; ?>_inicio_m" 
                                    class="form-control horario-<?php echo $dia_lower; ?>" placeholder="Inicio Mañana">
                            </div>
                            <div class="col-md-3">
                                <input type="time" name="<?php echo $dia_lower; ?>_fin_m" id="<?php echo $dia_lower; ?>_fin_m" 
                                    class="form-control horario-<?php echo $dia_lower; ?>" placeholder="Fin Mañana">
                            </div>
                            <div class="col-md-3">
                                <input type="time" name="<?php echo $dia_lower; ?>_inicio_t" id="<?php echo $dia_lower; ?>_inicio_t" 
                                    class="form-control horario-<?php echo $dia_lower; ?>" placeholder="Inicio Tarde">
                            </div>
                            <div class="col-md-3">
                                <input type="time" name="<?php echo $dia_lower; ?>_fin_t" id="<?php echo $dia_lower; ?>_fin_t" 
                                    class="form-control horario-<?php echo $dia_lower; ?>" placeholder="Fin Tarde">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- Imagen -->
        <div class="col-md-12">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
        </div>
        <!-- Botón Enviar -->
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Registrar Médico</button>
        </div>
    </div>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const checkboxes = document.querySelectorAll(".previa-cita");

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener("change", function () {
                const day = this.getAttribute("data-day");
                const inputs = document.querySelectorAll(`.horario-${day}`);
                inputs.forEach(input => {
                    input.disabled = this.checked;
                    if (this.checked) input.value = ""; // Limpiar los valores al deshabilitar
                });
            });
        });
    });
</script>

    </div>
</section>