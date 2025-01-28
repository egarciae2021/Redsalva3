<section class="fondo-azul content-space-3  d-block d-md-none">
    <div class="container pt-3 mb-n5">
        <div class="row">
            <div class="col-12 mt-2">
                <h1 class="h4 color-naranja"><?php echo $h1; ?></h1>
            </div>
            <div class="mb-0">
                <a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i>
                    Inicio</a>
            </div>
        </div>
    </div>
</section>
<img src="<?php echo $page_image; ?>" class="img-fluid mt-n5 d-block d-md-none" alt="<?php echo $h1; ?>">
<section class="fondo-azul content-space-3 d-none d-md-block" style=" background: rgb(4,147,167) !important;
background: linear-gradient(90deg, rgba(4,147,167,1) 29%, rgba(41,83,160,1) 68%)  !important;">
    <div class="container pt-3 mb-n5">
        <div class="row position-relative">
            <div class="position-md-absolute top-0 col-md-7 offset-md-5 h-100">
                <div class="bg-img-center card-img">
                    <!-- <img class="img-fluid rounded-3" src="<?php echo $page_image; ?>" alt="<?php echo $h1; ?>"> -->
                    <img class="img-fluid rounded-3" style="height:400px !important"   src="/images/nosotros.jpg">
                </div>
            </div>
            <div class="col-10 col-md-7 col-lg-6 offset-1 offset-md-0 content-space-md-1">
                <div class="position-relative fondo-celeste-bajo rounded-3 zi-1 p-6 mt-5 mb-5 pe-6  shadow-sm">
                    <div class="mb-2 mt-5">
                        <h1 class="h4 color-azul"><?php echo $h1; ?></h1>
                    </div>
                    <div class="mb-5">
                        <a class="link color-azul color-naranja-hover" href="/"><i
                                class="fa fa-arrow-left small me-1"></i> Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <?php require_once('db_connection.php'); ?>
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-md-6">
                <input type="text" id="searchInput" class="form-control" placeholder="Buscar por nombre o especialidad">
            </div>
            <div class="col-md-4">
                <select id="filterEspecialidad" class="form-select">
                    <option value="">Todas las especialidades</option>
                    <?php
                    $sql_especialidades = "SELECT DISTINCT especialidad FROM medicos ORDER BY especialidad ASC";
                    $result_especialidades = $conn->query($sql_especialidades);
                    while ($row_especialidad = $result_especialidades->fetch_assoc()) {
                        echo "<option value=\"" . $row_especialidad['especialidad'] . "\">" . $row_especialidad['especialidad'] . "</option>";
                    }
                    ?>
                </select>

            </div>
        </div>
        <div class="row gy-4" id="medicosContainer">
            <?php
            $base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];

            $sql = "SELECT * FROM medicos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $medico_id = $row['id'];
                    $pronombre = $row['sexo'] == '1' ? 'la' : 'el';
                    $titulo = $row['sexo'] == '1' ? 'Dra.' : 'Dr.';
                    $nombre_completo = mb_strtoupper($row['nombre'] . " " . $row['paterno'] . " " . $row['materno']);
                    $especialidad = mb_strtoupper($row['especialidad']);
                    $url = $base_url . "/staff/" . $row['url'];

                    $sql_horarios = "SELECT * FROM horarios WHERE medico_id = $medico_id";
                    $result_horarios = $conn->query($sql_horarios);

                    $horarios_por_dia = [];
                    if ($result_horarios->num_rows > 0) {
                        while ($horario = $result_horarios->fetch_assoc()) {
                            $dia = ucfirst($horario['dia']);
                            $previa_cita = $horario['previa_cita'];
                            $manana = ($horario['inicio_m'] && $horario['fin_m'] && $horario['inicio_m'] !== '00:00:00')
                                ? date("H:i", strtotime($horario['inicio_m'])) . " - " . date("H:i", strtotime($horario['fin_m']))
                                : '';
                            $tarde = ($horario['inicio_t'] && $horario['fin_t'] && $horario['inicio_t'] !== '00:00:00')
                                ? date("H:i", strtotime($horario['inicio_t'])) . " - " . date("H:i", strtotime($horario['fin_t']))
                                : '';

                            if (!isset($horarios_por_dia[$dia])) {
                                $horarios_por_dia[$dia] = [];
                            }
                            if ($previa_cita) {
                                $horarios_por_dia[$dia][] = "<a href=\"https://wa.me/51921883459?text=Hola,%20quiero%20una%20cita%20con%20$pronombre%20$titulo%20$nombre_completo%20en%20el%20día%20$dia%20bajo%20modalidad%20Previa%20Cita\" class=\"color-azul color-naranja-hover\" style=\"font-size: 0.85rem;\" data-bs-toggle=\"tooltip\" title=\"Reservar Previa Cita por WhatsApp\">Previa Cita</a>";
                            }
                            if (!empty($manana)) {
                                $horarios_por_dia[$dia][] = "<a href=\"https://wa.me/51921883459?text=Hola,%20quiero%20una%20cita%20con%20$pronombre%20$titulo%20$nombre_completo%20en%20el%20horario%20$dia%20$manana\" class=\"color-azul color-naranja-hover\" style=\"font-size: 0.85rem;\" data-bs-toggle=\"tooltip\" title=\"Click aqui para reservar por WhatsApp\">$manana</a>";
                            }
                            if (!empty($tarde)) {
                                $horarios_por_dia[$dia][] = "<a href=\"https://wa.me/51921883459?text=Hola,%20quiero%20una%20cita%20con%20$pronombre%20$titulo%20$nombre_completo%20en%20el%20horario%20$dia%20$tarde\" class=\"color-azul color-naranja-hover\" style=\"font-size: 0.85rem;\" data-bs-toggle=\"tooltip\" title=\"Click aqui para reservar por WhatsApp\">$tarde</a>";
                            }
                        }
                    }

                    $dias_horarios = [];
                    foreach ($horarios_por_dia as $dia => $horarios) {
                        if (!empty($horarios)) {
                            $dias_horarios[] = [
                                'dia' => $dia,
                                'horarios' => implode(" | ", $horarios),
                            ];
                        }
                    }

                    $column1 = array_slice($dias_horarios, 0, ceil(count($dias_horarios) / 2));
                    $column2 = array_slice($dias_horarios, ceil(count($dias_horarios) / 2));
                    $wa_link = "https://wa.me/51921883459?text=Hola,%20deseo%20una%20cita%20con%20$titulo%20$nombre_completo";
                    ?>
                    <div class="col-md-12 medico" data-nombre="<?php echo $nombre_completo; ?>"
                        data-especialidad="<?php echo $especialidad; ?>">
                        <div class="card card-flush">
                            <div class="row align-items-center">
                                <div class="col-sm-2">
                                    <img class="card-img" src="/<?php echo $row['imagen']; ?>"
                                        alt="Foto de <?php echo $nombre_completo; ?>">
                                </div>
                                <div class="col-sm-10">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase text-primary mb-2">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <a href="<?php echo $url; ?>" class="text-primary text-decoration-none">
                                                        <?php echo "$titulo $nombre_completo"; ?>
                                                    </a>
                                                    <p class="text-muted mb-2 text-uppercase" style="font-size: 0.9rem;">
                                                        <?php echo $especialidad; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-5 d-flex justify-content">
                                                    <a href="<?php echo $wa_link; ?>"
                                                        class="btn btn-naranja d-none d-lg-inline-block rounded-pill me-2"
                                                        target="_blank">
                                                        <i class="fab fa-whatsapp"></i> Solicitar cita
                                                    </a>
                                                    <a href="<?php echo $url; ?>"
                                                        class="btn btn-primary d-none d-lg-inline-block rounded-pill">
                                                        Ver más
                                                    </a>
                                                </div>
                                            </div>
                                        </h5>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p class="card-text mb-2">
                                                    <strong>CMP:</strong> <?php echo $row['cmp']; ?> <br>
                                                    <strong>RNE:</strong> <?php echo $row['rne'] ? $row['rne'] : 'N/A'; ?>
                                                </p>
                                            </div>
                                            <div class="col-md-5">
                                                <?php foreach ($column1 as $h) { ?>
                                                    <p class="mb-1 d-flex align-items-center">
                                                        <strong class="text-end me-2"
                                                            style="font-size: 0.85rem; width: 40%;"><?php echo $h['dia']; ?>:</strong>
                                                        <span><?php echo $h['horarios']; ?></span>
                                                    </p>
                                                <?php } ?>
                                            </div>
                                            <div class="col-md-5">
                                                <?php foreach ($column2 as $h) { ?>
                                                    <p class="mb-1 d-flex align-items-center">
                                                        <strong class="text-end me-2"
                                                            style="font-size: 0.85rem; width: 40%;"><?php echo $h['dia']; ?>:</strong>
                                                        <span><?php echo $h['horarios']; ?></span>
                                                    </p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='text-center'>No hay médicos registrados.</p>";
            }
            ?>
        </div>
        <nav aria-label="Paginación">
            <ul class="pagination justify-content-center mt-4">
                <li class="page-item">
                    <a class="page-link" href="#" onclick="filtrarYPaginar(1)">&laquo;</a>
                </li>
                <li class="page-item" id="lastPage">
                    <a class="page-link" href="#" onclick="filtrarYPaginar()">&raquo;</a>
                </li>
            </ul>
        </nav>
    </div>
    <script>
        const searchInput = document.getElementById("searchInput");
        const filterEspecialidad = document.getElementById("filterEspecialidad");
        const medicosContainer = document.getElementById("medicosContainer");
        const medicos = Array.from(document.querySelectorAll(".medico"));
        const paginationContainer = document.querySelector(".pagination");
        const resultadosPorPagina = 5;

        function renderPagination(totalPaginas, paginaActual) {
            paginationContainer.innerHTML = "";

            // Botón para ir a la primera página
            if (paginaActual > 1) {
                const liFirst = document.createElement("li");
                liFirst.className = "page-item";
                liFirst.innerHTML = `<a class="page-link" href="#" data-page="1">&laquo;</a>`;
                liFirst.addEventListener("click", (e) => {
                    e.preventDefault();
                    filtrarYPaginar(1);
                });
                paginationContainer.appendChild(liFirst);
            }

            // Generar los botones de paginación
            for (let i = 1; i <= totalPaginas; i++) {
                const li = document.createElement("li");
                li.className = `page-item ${i === paginaActual ? "active" : ""}`;
                li.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
                li.addEventListener("click", (e) => {
                    e.preventDefault();
                    filtrarYPaginar(i);
                });
                paginationContainer.appendChild(li);
            }

            // Botón para ir a la última página
            if (paginaActual < totalPaginas) {
                const liLast = document.createElement("li");
                liLast.className = "page-item";
                liLast.innerHTML = `<a class="page-link" href="#" data-page="${totalPaginas}">&raquo;</a>`;
                liLast.addEventListener("click", (e) => {
                    e.preventDefault();
                    filtrarYPaginar(totalPaginas);
                });
                paginationContainer.appendChild(liLast);
            }
        }

        function filtrarYPaginar(pagina = 1) {
            const searchTerm = searchInput.value.toLowerCase();
            const especialidad = filterEspecialidad.value.toLowerCase();
            const resultados = medicos.filter((medico) => {
                const nombre = medico.getAttribute("data-nombre").toLowerCase();
                const especialidadMedico = medico.getAttribute("data-especialidad").toLowerCase();
                return (
                    (nombre.includes(searchTerm) || especialidadMedico.includes(searchTerm)) &&
                    (especialidad === "" || especialidadMedico.includes(especialidad))
                );
            });

            const totalPaginas = Math.ceil(resultados.length / resultadosPorPagina);
            const inicio = (pagina - 1) * resultadosPorPagina;
            const fin = inicio + resultadosPorPagina;

            // Mostrar y ocultar médicos según la página
            medicos.forEach((medico) => (medico.style.display = "none"));
            resultados.slice(inicio, fin).forEach((medico) => (medico.style.display = "block"));

            // Renderizar paginación
            renderPagination(totalPaginas, pagina);
        }

        searchInput.addEventListener("input", () => filtrarYPaginar(1));
        filterEspecialidad.addEventListener("change", () => filtrarYPaginar(1));

        // Inicializar paginación
        filtrarYPaginar();
    </script>
</section>