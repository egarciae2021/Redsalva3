
<section class="container  g-pb-40">
	<div class="row">
		<div class="col-lg-9">
			<h1 class="g-color-topbar-montesur">Especialistas en partos múltiples</h1>
			<img src="/img/promociones/multiples.jpg" width="100%">
			<div class="g-mt-20">
				<p class="g-font-size-20">Cada vez más mujeres tienen bebés después de los 30 años y muchas toman medicamentos para la fertilidad. Ambos factores incrementan potencialmente las posibilidades de tener más de un bebé. Los antecedentes familiares de gemelos también aumentan las posibilidades.</p>
				<p class="g-font-size-20">Hace años, la mayoría de los gemelos llegaban por sorpresa. Actualmente, la mayoría de las mujeres se entera anticipadamente del embarazo múltiple. Deben ver al médico con más frecuencia que las mujeres que esperan a un solo niño ya que los embarazos múltiples deben controlarse más cuidadosamente. Los bebés de embarazos múltiples tienen mayor riesgo de nacer prematuramente. Algunas mujeres tienen que guardar reposo en cama para demorar el parto. Finalmente, es posible que necesiten cesárea, especialmente si tienen tres bebés o más.</p>
				<p class="g-font-size-20">En Clinica Red Salva somos los primeros en partos gemelares, con mas de 800 nuevas familias que confiaron en nuestro equipo médico de primer nivel e infraestructura de vanguardia.</p>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="u-heading-v3-1 g-mb-30">
				<h2 class="h6 u-heading-v3__title g-font-primary g-font-size-20 g-font-weight-100 g-color-topbar-montesur g-brd-primary"><strong>Ahora escríbenos al:</strong></h2>
			</div>
			<a href="#" class="btn btn-xl btn-outline-primary g-font-weight-300 g-letter-spacing-0_5 text-left rounded-0 g-mb-15">
				<span class="pull-left">Whatsapp</span>
				<i class="fab fa-whatsapp float-right g-font-size-32 g-ml-15"></i>
			</a>
			<a href="#" class="btn btn-xl btn-outline-primary g-font-weight-300 g-letter-spacing-0_5 text-left rounded-0 g-mb-15">
				<span class="pull-left">Inbox</span>
				<i class="fab fa-facebook-messenger float-right g-font-size-32 g-ml-15"></i>
			</a>
			<div class="u-heading-v3-1 g-mb-30">
				<h2 class="h6 u-heading-v3__title g-font-primary g-font-size-20 g-font-weight-100 g-color-topbar-montesur g-brd-primary"><strong>Te recomendamos ver:</strong></h2>
			</div>
		    <iframe width="100%" height="150" src="https://www.youtube.com/embed/P6skfmZIdZ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" class="g-mb-20"></iframe>
			<?php require_once('sidebar-servicios.php'); ?>
		</div>
	</div>
</section>

<?php require_once('contact.php'); ?>


<section class="container g-pb-40">
	<div class="row">
		<div class="col-12">
				<div class="u-heading-v3-1 g-mb-30">
					<h2 class="h6 u-heading-v3__title g-font-size-20 g-font-primary g-color-topbar-montesur g-brd-primary">Conoce a nuestros <strong>especialistas</strong></h2>
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
						                    $ssql = "SELECT * FROM `staff` where atencion = 2 and especialidad_slug='ginecologia-y-obstetricia' order by id ASC"; 
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