<style>
.swiper-slide {
    background-size: cover;
    background-position: center;
    background-color:rgb(255, 255, 255); /* Placeholder color */
}

.lazyload {
    background-image: none; /* Sin fondo inicialmente */
}

.lazyloaded {
    transition: background-image 0.3s ease-in-out; /* Transición suave */
}

</style>

<div class="position-relative" style="margin-top:10% !important ;" >
	<div class="js-swiper-blog-modern-hero swiper swiper-equal-height"   >
		<div class="swiper-wrapper" > 
			<div class="swiper-slide lazyload bg-img-start content-space-4 content-space-t-lg-3 content-space-t-sm-4 content-space-b-sm-4" data-bg="/images/banner_1.svg">
				<div class="container content-space-b-sm-2 content-space-t-sm-2">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-5">
								<!-- <h1 class="text-primary">20 años atendiendo<br>a las familias<br>del Perú y el mundo.</h1> -->
							</div>
									
							<!-- <a class="btn btn-naranja d-md-block d-none d-lg-inline-block" href="/nosotros">Conócenos</a> -->
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide lazyload bg-img-start content-space-4 content-space-t-lg-3 content-space-t-sm-4 content-space-b-sm-4" data-bg="/images/banner_2.svg">
				<div class="container content-space-b-sm-2 content-space-t-sm-2">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-5">
								<!-- <h1 class="text-primary">Conoce nuestro<br>programa especializado:<br>Dulce Espera</h1> -->
								<p>
							</div>
									
							<!-- <a class="btn btn-naranja d-md-block d-none d-lg-inline-block" href="/programas/dulce-espera">Descubrelo</a> -->
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide lazyload bg-img-start content-space-4 content-space-t-lg-3 content-space-t-sm-4 content-space-b-sm-4" data-bg="/images/banner_3.svg">
				<div class="container content-space-b-sm-2 content-space-t-sm-2">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-5">
								<!-- <h1 class="text-primary">Seguridad y protección<br>en todas<br>nuestra especialidades.</h1> -->
							</div>
							<!-- <a class="btn btn-naranja d-md-block d-none d-lg-inline-block" href="/especialidades">Conoce más</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="js-swiper-blog-modern-hero-pagination swiper-pagination swiper-pagination-light position-absolute bottom-0 start-0 end-0 mb-3 d-sm-none"></div>
	</div>
	<div class="position-sm-absolute bottom-0 start-0 end-0 zi-2 d-none d-sm-block mb-7">
		<div class="container content-space-t-1">
			<div class="js-swiper-blog-modern-hero-thumbs swiper swiper-step-pagination swiper-step-pagination-light">
				<div class="swiper-wrapper" style="top: 100px !important;">
					<div class="swiper-slide" style="background-color:#2953A0 !important">
						<span class="swiper-step-pagination-title"> </span>
					</div>
					<div class="swiper-slide" style="background-color:#2953A0 !important">
						<span class="swiper-step-pagination-title"> </span>
					</div>
					<div class="swiper-slide" style="background-color:#2953A0 !important">
						<span class="swiper-step-pagination-title"> </span>
					</div>
					<div class="swiper-slide" style="background-color:#2953A0 !important">
						<span class="swiper-step-pagination-title"> </span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">document.addEventListener("DOMContentLoaded", function () {
    const lazySlides = document.querySelectorAll(".lazyload");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const slide = entry.target;
                    const bgImage = slide.getAttribute("data-bg");
                    if (bgImage) {
                        slide.style.backgroundImage = `url(${bgImage})`;
                        slide.classList.add("lazyloaded");
                        observer.unobserve(slide); // Dejar de observar después de cargar
                    }
                }
            });
        },
        {
            rootMargin: "0px 0px 50px 0px", // Opcional: Margen para cargar antes de que sea visible
            threshold: 0.1, // Visible al menos 10% para iniciar la carga
        }
    );

    lazySlides.forEach((slide) => observer.observe(slide));
});
</script>