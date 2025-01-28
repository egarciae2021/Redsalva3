<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1; ?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i>
					Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i
						class="fa fa-arrow-left small me-1"></i> Especialidades</a>
			</div>
		</div>
	</div>
</section>
<img src="<?php echo $page_image; ?>" class="img-fluid mt-n5 d-block d-md-none" alt="<?php echo $h1; ?>">
<section class="fondo-azul content-space-3 d-none d-md-block" style=" background: rgb(4,147,167) !important;
background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%)  !important;">
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
						<h1 class="h4 color-azul"><?php echo $h1; ?></h1>
					</div>
					<div class="mb-5">
						<a class="link color-azul color-naranja-hover" href="/"><i
								class="fa fa-arrow-left small me-1"></i> Inicio</a>
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades"><i
								class="fa fa-arrow-left small me-1"></i> Especialidades</a>
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
				<p>El concepto de anestesia hace referencia a la inducción controlada de insensibilidad que deben
					alcanzar los pacientes que se someten a procedimientos quirúrgicos. La anestesia moderna se basa en
					principios de amnesia, analgesia, estabilidad hemodinámica y protección de los órganos y sistemas,
					siendo factores clave de éxito la predictibilidad, identificación de factores de riesgo y adecuado
					control del dolor postquirúrgico. El control del dolor como fin supremo del cuidado sanitario
					plantea necesidades que deben ser satisfechas en el contexto de la seguridad del paciente y la
					medicina centrada en las personas con oportunidad, efectividad y eficacia. La anestesiología, a
					través de una unidad ambulatoria, permite abordar situaciones cada vez más complejas y cambiantes
					relacionas con la atención sanitaria de los seres humanos optimizando la calidad y valor de los
					servicios que se proveen.</p>
				<?php require_once('links-anestesiologia.php'); ?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php'); ?>