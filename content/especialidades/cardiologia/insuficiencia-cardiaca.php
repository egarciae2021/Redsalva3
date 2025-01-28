<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1;?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades/cardiologia"><i class="fa fa-arrow-left small me-1"></i> Cardiología</a>
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
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades/cardiologia"><i class="fa fa-arrow-left small me-1"></i> Cardiología</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-lg-1">
				<p>La insuficiencia cardíaca es una condición en la que el corazón no puede bombear sangre de manera eficiente para satisfacer las necesidades del cuerpo. Esta afección puede desarrollarse como resultado de diversas enfermedades cardíacas, como la cardiopatía coronaria o la hipertensión arterial. Los síntomas comunes incluyen dificultad para respirar, hinchazón en las piernas y fatiga extrema. La insuficiencia cardíaca requiere un manejo cuidadoso y continuo para mejorar la calidad de vida del paciente.</p>
				<p>En nuestra clínica, ofrecemos un enfoque multidisciplinario para el tratamiento de la insuficiencia cardíaca. Utilizamos herramientas diagnósticas avanzadas como ecocardiogramas y resonancias magnéticas cardíacas para evaluar la función del corazón. Los tratamientos pueden incluir cambios en el estilo de vida, medicamentos, dispositivos médicos y, en casos severos, cirugía. Nos esforzamos por proporcionar una atención compasiva y de alta calidad para ayudar a los pacientes a manejar esta condición de manera efectiva.</p>
				<?php require_once('links-cardiologia.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>