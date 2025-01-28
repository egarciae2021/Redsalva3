<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1;?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades/anestesiologia"><i class="fa fa-arrow-left small me-1"></i> Anestesiología</a>
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
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades/anestesiologia"><i class="fa fa-arrow-left small me-1"></i> Anestesiología</a>
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
				<p>Acto médico mediante el cual se evalúa y determina de manera objetiva la condición de un paciente que será sometido a un acto anestésico. El objetivo final es la determinación de un riesgo perioperatorio y la planeación de la técnica anestésica que ofrezca la mayor seguridad al paciente.</p>
				<p>El documento de Evaluación Pre-anestésica forma parte de la historia clínica y contiene datos de antecedentes, examen físico, exámenes de laboratorio y evaluaciones complementarias. La consulta garantiza educación del paciente respecto al procedimiento anestésico, satisfacción de interrogantes o dudas, planificación consensuada del acto anestésico y obtención del Consentimiento Informado de Anestesia.</p>
				<p>Formularios:</p>
				<ul>
					<li>Ficha de Evaluación Pre-anestésica</li>
					<li>Consentimiento Informado de Anestesia.</li>
					<li>Ambiente: Consultorio Médico Estándar</li>
				</ul>
				<?php require_once('links-anestesiologia.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>