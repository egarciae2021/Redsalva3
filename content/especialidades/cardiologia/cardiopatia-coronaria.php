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
				<p>La cardiopatía coronaria es una enfermedad que afecta las arterias coronarias, las cuales suministran sangre al músculo cardíaco. Esta condición es causada principalmente por la acumulación de placa en las paredes arteriales, lo que puede llevar a una reducción del flujo sanguíneo y, eventualmente, a un ataque cardíaco. Los factores de riesgo incluyen el tabaquismo, la hipertensión, la diabetes y el colesterol alto. Los síntomas típicos son dolor en el pecho, dificultad para respirar y fatiga.</p>
				<p>En nuestra clínica, nos especializamos en el manejo y tratamiento de la cardiopatía coronaria. Utilizamos tecnología de última generación para realizar diagnósticos precisos, como angiografías coronarias y pruebas de esfuerzo. Ofrecemos tratamientos que van desde cambios en el estilo de vida y medicamentos hasta intervenciones más avanzadas como la angioplastia y la cirugía de bypass. Nuestro objetivo es proporcionar una atención comprensiva y efectiva para prevenir complicaciones y mejorar la salud cardiovascular de nuestros pacientes.</p>
				<?php require_once('links-cardiologia.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>