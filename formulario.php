
<div class="container content-space-1">
	<div class="mx-lg-auto">
		<div class="position-relative">
			<div class="card card-shadow card-login">
				<div class="row">
					<div class="col-md-6 p-2 p-md-4">
						<h2 class="text-center text-primary py-5">Solicita una consulta</h2>
						<div class="card-body">
							<form method="POST" action="/gracias-por-consultar">
								<div class="row">
									<div class="col-md-6">
										<div class="mb-4">
											<label>Nombre</label>
											<input autocomplete="on"  type="text" class="form-control" name="name" placeholder="Nombre" aria-label="Nombre" required>
										</div>
									</div>

									<div class="col-md-6">
										<div class="mb-4">
											<label>Email</label>
											<input autocomplete="off"  type="text" class="form-control" name="email" placeholder="Email" aria-label="Email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="mb-4">
											<label>Teléfono</label>
											<input autocomplete="on"  type="text" class="form-control" name="phone" placeholder="Teléfono" aria-label="Teléfono">
										</div>
									</div>
								</div>
								<div class="mb-4">
									<label>Mensaje</label>
									<textarea class="form-control" name="message" id="contactsFormDetails" placeholder="Cuéntanos más sobre tus necesidades." aria-label="Cuéntanos más sobre tus necesidades." rows="4"></textarea>
								</div>
								<div class="d-grid gap-4">
									<input type="hidden" id="recaptcha_token" name="recaptcha_token">
									<button type="submit" class="btn btn-naranja d-md-block" style="border-radius:10px !important">Solicitar una cita</button>
								</div>
							</form>
						</div>
					</div>

					<div class="col-md-6 d-md-flex justify-content-center flex-column fondo-celeste-bajo p-2 p-md-4" 
					style="background-color:gray"
					>
					<!-- style="background-image: url(/images/wave-pattern.svg);" -->
						<h2 class="text-center text-primary py-5">¿Quieres contactarnos?</h2>
						<a class="card card-transition mb-4" href="tel:+519054534" target="_blank">
							<div class="card-body">
								<div class="d-flex" >
									<div class="flex-shrink-0" >
										<i class="fa fa-phone fs-1 text-dark" style="color:#0493A7 !important"></i>
									</div>
									<div class="flex-grow-1 ms-4 my-2">
										<h5 class="card-title">Llámanos</h5>
										<p class="card-text">(+51) 905 4534</p> 
									</div>
								</div>
							</div>
						</a>
						<a class="card card-transition mb-4" href="mailto:servicioalcliente@redsalva.com" target="_blank">
							<div class="card-body">
								<div class="d-flex">
									<div class="flex-shrink-0">
										<i class="fa fa-envelope fs-1 text-dark" style="color:#0493A7 !important"></i>
									</div>
									<div class="flex-grow-1 ms-4">
										<h5 class="card-title">Informes</h5>
										<p class="card-text d-none d-md-inline">servicioalcliente@redsalva.com</p>
										<p class="card-text d-inline d-md-none">Click aquí</p>
									</div>
								</div>
							</div>
						</a>
						<a class="card card-transition mb-4" href="https://maps.app.goo.gl/G7QmevKGYRGfc71y7" target="_blank">
							<div class="card-body">
								<div class="d-flex">
									<div class="flex-shrink-0">
										<i class="fa fa-map-marker fs-1 text-dark" style="color:#0493A7 !important"></i>
									</div>
									<div class="flex-grow-1 ms-4">
										<h5 class="card-title">Dirección</h5>
										<p class="card-text">Av. Honorio Delgado 301 - San Martin de Porres</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>