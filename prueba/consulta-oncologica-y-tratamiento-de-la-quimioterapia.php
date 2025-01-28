<div class="shortcode-html">
	<section class="g-brd-top g-brd-bottom g-brd-gray-light-v4 g-py-20">
		<div class="container">
			<div class="d-sm-flex text-center">
				<div class="align-self-center">
					<h2 class="h3 g-font-weight-300 w-100 g-mb-10 g-mb-0--md">Consulta oncológica y tratamiento de la quimioter</h2>
				</div>

				<div class="align-self-center ml-auto">
					<ul class="u-list-inline">
						<li class="list-inline-item g-mr-5">
							<a class="u-link-v5 g-color-main" href="/">Inicio</a>
							<i class="g-color-gray-light-v2 g-ml-5">/</i>
						</li>
						<li class="list-inline-item g-mr-5">
							<a class="u-link-v5 g-color-main" href="/especialidades">Especialidades</a>
							<i class="g-color-gray-light-v2 g-ml-5">/</i>
						</li>
						<li class="list-inline-item g-mr-5">
							<a class="u-link-v5 g-color-main" href="/especialidades/oncologia-molecular">Oncología molecular</a>
							<i class="g-color-gray-light-v2 g-ml-5">/</i>
						</li>
						<li class="list-inline-item g-color-primary">
							<span>Consulta oncológica y tratamiento de la quimioter</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</div>
<section class="container g-pt-50 g-pb-40">
	<div class="row">
		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-6 g-mb-30">
					<div class="mb-5">
						<p>Staff de profesionales con alta experiencia en oncología, que nos permite brindar asesoría a los pacientes en relación a las reacciones adversas de los medicamentos oncológicos y a su enfermedad de base (pacientes diabéticos, hipertensos, etc) haciendo la debida valoración para el ajuste oportuno de la dosis o utiliza medicamentos para evitar una mayor toxicidad.</p>
					</div>
				</div>
				<div class="col-lg-6 g-mb-30">
					<img src="/img/consulta-oncologica-y-tratamiento-de-la-quimioterapia.jpg" width="100%" alt="<?php echo $page_title;?>" title="<?php echo $page_title;?>">
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<?php require_once('procedimientos-oncologia-molecular.php'); ?>
		</div>
	</div>
</section>

<section class="container g-pb-40">
	<div class="row">
		<div class="col-12">
					
				<div class="u-heading-v3-1 g-mb-30">
					<h2 class="h6 u-heading-v3__title g-font-size-20 g-font-primary g-color-topbar-montesur g-brd-primary">Conoce nuestro staff de <strong>Oncología molecular</strong></h2>
				</div>
							<div class="table-responsive">
								<table id="example2" class="table table-bordered table-hover u-table--v2 text-center text-uppercase g-col-border-side-0">
									<thead>
										<tr>
											<th></th>
											<th>Doctor</th>
											<th>Lunes</th>
											<th>Martes</th>
											<th>Miércoles</th>
											<th>Jueves</th>
											<th>Viernes</th>
											<th>Sábado</th>
										</tr>
									</thead>
									<tbody>
										 <?php
						                    $ssql = "SELECT * FROM `staff` where atencion = 2 and especialidad_slug='oncologia-molecular' order by apellido_paterno ASC";
						                    $resultado = $conn->query($ssql);
						                    while($fila = $resultado->fetch_array()) {
						                        $lmd = $fila['lmd'];
						                        $lmh = $fila['lmh'];
						                        $ltd = $fila['ltd'];
						                        $lth = $fila['lth'];

						                        $mmd = $fila['mmd'];
						                        $mmh = $fila['mmh'];
						                        $mtd = $fila['mtd'];
						                        $mth = $fila['mth'];

						                        $mimd = $fila['mimd'];
						                        $mimh = $fila['mimh'];
						                        $mitd = $fila['mitd'];
						                        $mith = $fila['mith'];

						                        $jmd = $fila['jmd'];
						                        $jmh = $fila['jmh'];
						                        $jtd = $fila['jtd'];
						                        $jth = $fila['jth'];

						                        $vmd = $fila['vmd'];
						                        $vmh = $fila['vmh'];
						                        $vtd = $fila['vtd'];
						                        $vth = $fila['vth'];

						                        $smd = $fila['smd'];
						                        $smh = $fila['smh'];
						                        $std = $fila['std'];
						                        $sth = $fila['sth'];

						                        $CMP = $fila['cmp'];
						                        $RNE = $fila['rne'];
						                        $url = $fila['url'];
						                        $na = strtolower($fila['nombres']);
						                        $find = array('á','é','í','ó','ú','â','ê','î','ô','û','ã','õ','ç','ñ','Á','É','Í','Ó','Ú','Ñ',' ','.');
						                        $repl = array('a','e','i','o','u','a','e','i','o','u','a','o','c','n','A','E','I','O','U','N','-','');
						                        $name = str_replace($find, $repl, $na);
						                        switch ($fila['sexo']) {
						                            case 2:
						                                $genero ='Dr. ';
						                            break;
						                            case 1:
						                                $genero ='Dra. ';
						                            break;
						                        }
						                        $lap = strtolower($fila['apellido_paterno']);
						                        $lam = strtolower($fila['apellido_materno']);
						                        $apellido = $lap ." ".$lam;
						                        $last = str_replace($find, $repl, $la);
						                        $base = "/staff-medico/";
						                        $url = $base.$url;
						                        
						                        echo "<tr>";
						                            echo "<td><img src='/";echo $fila['imagen'];echo "' width='50px' height='70px'></td>";
						                            echo "<td style='text-transform:uppercase;'><a class='g-color-indigo g-color-gray--hover' href='"; echo $url; echo "'><strong>";echo $genero; echo $apellido;echo ", ";echo $na; echo "</strong></a><br><small>";echo $fila['especialidad'];echo "</small></td>";
						                            echo "<td>";if ($lmd != 0 && $lmd != 25) {echo $lmd; echo " - ";echo $lmh;echo "<br>";} if ($lmd == 25) {echo "Previa cita";} ;if ($ltd != 0) {echo $ltd; echo " - ";echo $lth;echo "<br>";};echo "</td>";
						                            echo "<td>";if ($mmd != 0 && $mmd != 25) {echo $mmd; echo " - ";echo $mmh;echo "<br>";}if ($mmd == 25) {echo "Previa cita";} ;if ($mtd != 0) {echo $mtd; echo " - ";echo $mth;echo "<br>";};echo "</td>";
						                            echo "<td>";if ($mimd != 0 && $mimd != 25) {echo $mimd; echo " - ";echo $mimh;echo "<br>";}if ($mimd == 25) {echo "Previa cita";} ;if ($mitd != 0) {echo $mitd; echo " - ";echo $mith;echo "<br>";};echo "</td>";
						                            echo "<td>";if ($jmd != 0 && $jmd != 25) {echo $jmd; echo " - ";echo $jmh;echo "<br>";}if ($jmd == 25) {echo "Previa cita";} ;if ($jtd != 0) {echo $jtd; echo " - ";echo $jth;echo "<br>";};echo "</td>";
						                            echo "<td>";if ($vmd != 0 && $vmd != 25) {echo $vmd; echo " - ";echo $vmh;echo "<br>";}if ($vmd == 25) {echo "Previa cita";} ;if ($vtd != 0) {echo $vtd; echo " - ";echo $vth;echo "<br>";};echo "</td>";
						                            echo "<td>";if ($smd != 0 && $smd != 25) {echo $smd; echo " - ";echo $smh;echo "<br>";}if ($smd == 25) {echo "Previa cita";} ;if ($std != 0) {echo $std; echo " - ";echo $sth;echo "<br>";};echo "</td>";
						                        echo "</tr>";
						                        }
						                    ?>
									</tbody>
								</table>
							</div>
		</div>
	</div>
</section>
<?php require_once('contact.php'); ?>