<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1;?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades/cirugia-general"><i class="fa fa-arrow-left small me-1"></i> Cirugía General</a>
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
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades/cirugia-general"><i class="fa fa-arrow-left small me-1"></i> Cirugía General</a>
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
				<p>La cirugía de hígado puede ser necesaria para tratar una variedad de condiciones, como tumores benignos y malignos, enfermedades hepáticas y traumatismos. Dependiendo de la enfermedad, el procedimiento puede variar desde resecciones parciales del hígado hasta trasplantes completos. La cirugía hepática es compleja y requiere un equipo especializado para garantizar la seguridad y efectividad del tratamiento.</p>
				<p>En la Clinica Red Salva, ofrecemos un enfoque integral para la cirugía de hígado. Contamos con un equipo multidisciplinario de cirujanos, hepatólogos y oncólogos que trabajan juntos para proporcionar el mejor cuidado posible. Utilizamos técnicas avanzadas y equipamiento de última generación para realizar procedimientos precisos y seguros. Nuestro compromiso es brindar una atención completa y personalizada, desde el diagnóstico hasta la recuperación postoperatoria.</p>
				<?php require_once('links-cirugia-general.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>