<section class="container g-pt-50 g-pb-40">
	<div class="row">
		<div class="col-lg-9">
			<img class="img-fluid u-shadow-v2 g-mb-30 g-hidden-sm-down" src="/img/promociones/cardio.jpg" width="100%" alt="Campaña de vacunación | Promociones | Clinica Red Salva" title="Campaña de vacunación  | Promociones | Clinica Red Salva">
			<img class="img-fluid u-shadow-v2 g-mb-30 g-hidden-sm-up" src="/img/promociones/cardio-movil.jpg" width="100%" alt="Campaña de vacunación | Promociones | Clinica Red Salva" title="Campaña de vacunación  | Promociones | Clinica Red Salva">
			<h1 class="g-color-topbar-montesur">Varices: ¿Cómo detectarlos a tiempo?</h1>
			<p>Las varices son dilataciones venosas que se caracterizan por impedir que la sangre retorne de forma eficaz al corazón (insuficiencia venosa). Se producen por una alteración de las válvulas venosas, que al no cerrarse como es debido, hacen que la sangre se acumule en las venas, haciendo que se dilaten; causando dolor, pesadez, hinchazón, ardor en piernas y pies, entre otros; por lo que deben ser detectadas tempranamente a través de la ecografía Doppler, para prevenir complicaciones y evitar su progresión.</p>

			<p class="g-font-size-24 g-font-weight-100 roboto">Consulta de varices más Ecografía Doppler. S/236</strong></p>
		</div>
		<div class="col-lg-3">
			<a href="https://api.whatsapp.com/send?phone=51921883459&text=Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20esta%20campaña"" class="btn btn-md btn-block u-btn-inset u-btn-outline-montesur g-mr-10 g-mb-15 g-font-size-20 g-font-weight-100"> <i class="fab fa-whatsapp"></i> 979 708 672</a>
			<br>
			<a href="#cita" class="btn btn-md btn-block u-btn-inset u-btn-outline-indigo g-mr-10 g-mb-15 g-font-weight-900">QUIERO UNA CITA</a>
			<br>

			<div class="u-heading-v3-1 g-mb-30">
				<h2 class="g-font-size-20 u-heading-v3__title g-font-primary g-color-topbar-montesur g-brd-primary"><strong>¿Qué te ofrecemos?</strong></h2>
			</div>
					<table class="table table-bordered table-hover u-table--v2 g-col-border-side-0">
						<tbody>
							<tr>
								<td>Staff médico especializado</td>
							</tr>
							<tr>
								<td>Completa sala de operaciones</td>
							</tr>
						</tbody>
					</table>
			<?php require_once('sidebar-servicios.php'); ?>
		</div>
	</div>
</section>
<section class="container g-pb-40">
	<div class="row">
		<div class="col-12">
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
						                    $ssql = "SELECT * FROM `staff` where atencion = 2 and especialidad_slug='cardiologia' order by apellido_paterno ASC"; 
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
						                        $completo = $na ." ".$apellido;

						                        
						                        $na2 = strtolower($fila['especialidad']);
						                        $find2 = array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;','&Aacute;','&Eacute;','&Iacute;','&Oacute;','&Uacute;','ã','õ','ç','ñ');
						                        $repl2 = array('a','e','i','o','u','a','e','i','o','u','a','o','c','n');
						                        $especialidad_slug = str_replace($find2, $repl2, $na2);


						                        $na3 = strtolower($completo);
						                        $nombre_slug = str_replace($find2, $repl2, $na3);
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