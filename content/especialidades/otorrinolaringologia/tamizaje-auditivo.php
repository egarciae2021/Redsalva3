<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1;?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades/otorrinolaringologia"><i class="fa fa-arrow-left small me-1"></i> Otorrinolaringología</a>
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
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades/otorrinolaringologia"><i class="fa fa-arrow-left small me-1"></i> Otorrinolaringología</a>
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
				<p>El tamizaje auditivo mediante emisiones otoacústicas es una prueba que detecta la capacidad del oído interno (cóclea) para producir sonidos en respuesta a estímulos auditivos. Este examen es rápido, no invasivo y se utiliza comúnmente en recién nacidos para detectar pérdida auditiva congénita. El tamizaje auditivo temprano es fundamental para el desarrollo del habla y el lenguaje, permitiendo una intervención oportuna si se detecta alguna anormalidad.</p>
				<p>En la Clinica Red Salva, ofrecemos tamizajes auditivos con emisiones otoacústicas para asegurar un desarrollo auditivo saludable en los niños. Nuestros especialistas en audiología utilizan esta prueba como una herramienta clave en la prevención y detección temprana de trastornos auditivos, asegurando un tratamiento efectivo y oportuno.</p>
				<?php require_once('links-otorrinolaringologia.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>