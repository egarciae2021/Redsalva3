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
				<p>El lavado de oídos es un procedimiento que se utiliza para limpiar el conducto auditivo externo de cerumen acumulado u otras obstrucciones. Utilizando una solución salina tibia, se introduce suavemente en el oído para aflojar y eliminar el cerumen. Este método es seguro, efectivo y ayuda a prevenir infecciones, además de mejorar la audición en casos de obstrucción significativa.</p>
				<p>En la Clinica Red Salva, nuestros otorrinolaringólogos realizan lavados de oídos con técnicas seguras y efectivas, asegurando una limpieza adecuada y el alivio de los síntomas asociados con la acumulación de cerumen. Nos enfocamos en proporcionar una atención de calidad, permitiendo a nuestros pacientes disfrutar de una mejor salud auditiva.</p>
				<?php require_once('links-otorrinolaringologia.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>