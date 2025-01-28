<div class="bg-soft-primary">
	<div class="container content-space-t-3 content-space-t-lg-4 content-space-b-1">
		<h1 class="display-5 mb-5">Gracias <?php echo htmlspecialchars($_POST['name']); ?></h1>
		<div class="mb-3">
			<a class="link link-secondary" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
		</div>
	</div>
</div>
<section class="py-5">
	<div class="container">
		<div class="row">
			<div class='col-sm-12 col-md-12 g-bg-secondary'>
				<div class='py-100'>
					<p>Hemos recibido la siguiente información:</p>
					<ul>
						<li><strong>Nombre:</strong> <?php echo htmlspecialchars($_POST['name']); ?></li>
						<li><strong>Correo:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
						<li><strong>Teléfono:</strong> <?php echo htmlspecialchars($_POST['phone']); ?></li>
						<li><strong>RUC:</strong> <?php echo htmlspecialchars($_POST['ruc']); ?></li>
						<li><strong>Razón social:</strong> <?php echo htmlspecialchars($_POST['razon']); ?></li>
						<li><strong>Cargo:</strong> <?php echo htmlspecialchars($_POST['cargo']); ?></li>
						<li><strong>Mensaje:</strong> <?php echo htmlspecialchars($_POST['message']); ?></li>
					</ul>
					<p>Nos pondremos en contacto contigo a la brevedad posible.</p>
				</div>
			</div>
		</div>
	</div>
</section>