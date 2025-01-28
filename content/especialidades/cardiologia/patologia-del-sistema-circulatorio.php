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
				<p>Las patologías del sistema circulatorio abarcan una amplia gama de enfermedades que afectan el sistema vascular, incluyendo arterias, venas y capilares. Estas condiciones pueden incluir enfermedades arteriales periféricas, venas varicosas y trombosis venosa profunda, entre otras. Los síntomas pueden variar desde dolor y hinchazón en las extremidades hasta complicaciones más graves como úlceras y embolias.</p>
				<p>En la Clinica Red Salva, nos dedicamos a diagnosticar y tratar una variedad de patologías del sistema circulatorio. Empleamos tecnologías avanzadas como ultrasonidos Doppler y angiografías para una evaluación precisa. Los tratamientos pueden ir desde terapias no invasivas, como la compresión y los cambios en el estilo de vida, hasta intervenciones más invasivas como la angioplastia y la cirugía vascular. Nuestro objetivo es proporcionar un tratamiento eficaz que mejore la circulación y la salud vascular de nuestros pacientes.</p>
				<?php require_once('links-cardiologia.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>