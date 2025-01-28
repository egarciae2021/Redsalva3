<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1;?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades/gastroenterologia"><i class="fa fa-arrow-left small me-1"></i> Gastroenterología</a>
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
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades/gastroenterologia"><i class="fa fa-arrow-left small me-1"></i> Gastroenterología</a>
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
				<p>La endoscopia es un procedimiento utilizado para examinar el tracto digestivo superior, incluyendo el esófago, el estómago y el duodeno. Este examen se realiza utilizando un endoscopio, un tubo flexible con una cámara en el extremo, que permite a los médicos identificar y tratar diversas condiciones como úlceras, inflamaciones y cánceres.</p>
				<p>En nuestra clínica, ofrecemos endoscopias con técnicas avanzadas y un enfoque centrado en el paciente. Nos aseguramos de que cada procedimiento se realice con la mayor precisión y cuidado posible, proporcionando una atención integral desde la evaluación inicial hasta el seguimiento postprocedimiento.</p>
				<?php require_once('links-gastroenterologia.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>