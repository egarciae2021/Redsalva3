<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1;?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades/pediatria-vacunas"><i class="fa fa-arrow-left small me-1"></i> Pediatría Vacunas</a>
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
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades/pediatria-vacunas"><i class="fa fa-arrow-left small me-1"></i> Pediatría Vacunas</a>
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
				<p>Esta vacuna incluye seis componentes que previenen la difteria, tos ferina, tetano, poliomielitis, influenza y hepatitis B.</p>
				<p class="color-azul h5">¿Cuándo debe colocarse esta vacuna?</p>
				<p>Los niños deben recibir 3 dosis y 2 refuerzos:</p>
				<ul>
					<li><strong>Primera dosis:</strong><br>A los 2 meses.</li>
					<li><strong>Segunda dosis:</strong><br>A los 4 meses.</li>
					<li><strong>Tercera dosis:</strong><br>A los 6 meses.</li>
					<li><strong>Refuerzo 1:</strong><br>A los 18 meses.</li>
					<li><strong>Refuerzo 2:</strong><br>A los 4 años.</li>
				</ul>
				<p class="color-azul h5">¿Esta vacuna tiene efectos secundarios?</p>
				<p>En algunos casos se presenta fiebre ligera, enrojecimiento, hinchazón, entre otros.</p>
				<p>En cualquier caso, si observa algún signo que pueda representar una reacción alérgica, comunicarse con su pediatra.</p>
				<p><small>*La Pentavalente incluye 5 componentes que previenen la difteria, tos ferina, tétano, poliomielitis e influenza.</small></p>
				<?php require_once('links-pediatria-vacunas.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>