<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1;?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
			</div>
		</div>
	</div>
</section>
<img src="<?php echo $page_image;?>" class="img-fluid mt-n5 d-block d-md-none" alt="<?php echo $h1;?>">
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
						<h1 class="h4 color-azul"><?php echo $h1;?></h1>
					</div>
					<div class="mb-5">
						<a class="link color-azul color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
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
				<p>La mastología y el tratamiento del cáncer de piel son dos áreas críticas en la medicina que se centran en la prevención, diagnóstico y tratamiento de enfermedades significativas que afectan a muchas personas.</p>
				<p class="color-azul h5">Mastología</p>
				<p>La mastología se enfoca en el diagnóstico y tratamiento de las enfermedades de las mamas, incluyendo afecciones benignas como quistes y mastitis, y enfermedades malignas como el cáncer de mama. En la Clinica Red Salva, ofrecemos un enfoque integral y personalizado, utilizando tecnología de última generación para procedimientos de detección temprana como mamografías digitales 3D y ecografías mamarias. Promovemos el autoexamen de mamas como una herramienta vital para la detección temprana y realizamos intervenciones quirúrgicas avanzadas, desde biopsias guiadas por ecografía hasta mastectomías y cirugías reconstructivas. Nuestro objetivo es proporcionar una atención de alta calidad y compasiva en cada etapa del tratamiento, garantizando el bienestar de nuestras pacientes.</p>
				<p class="color-azul h5">Cáncer de Piel</p>
				<p>El cáncer de piel es una de las formas más comunes de cáncer y se presenta en diversos tipos, incluyendo el carcinoma basocelular, el carcinoma espinocelular y el melanoma. La detección temprana es crucial para un tratamiento eficaz y un mejor pronóstico. En la Clinica Red Salva, nuestros dermatólogos utilizan métodos avanzados para la identificación y tratamiento de lesiones sospechosas, como el mapeo corporal total, biopsias de ganglio centinela y la cirugía de Mohs, que permite la eliminación precisa del cáncer con máxima preservación de tejido sano.</p>
				<p>Nuestra clínica proporciona una atención integral y personalizada para el cáncer de piel, enfocándose en la detección temprana y el tratamiento eficaz. Ofrecemos desde despistajes de cáncer de piel hasta resecciones locales amplias y reconstrucción, siempre asegurando un seguimiento continuo para obtener los mejores resultados posibles.</p>
				<p>En conjunto, nuestras especialidades en mastología y dermatología trabajan para ofrecer una atención integral, combinando tecnología avanzada con un enfoque humano y personalizado para garantizar la salud y el bienestar de nuestros pacientes.</p>
				<?php require_once('links-mastologia-y-cancer-de-piel.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>