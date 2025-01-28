<?php require_once('db_connection.php'); ?>

<div class="container my-5">
    <h1 class="text-center mb-4">Listado de Médicos</h1>

    <!-- Buscador y Filtro -->
    <div class="row mb-4">
        <div class="col-md-6">
            <input type="text" id="searchInput" class="form-control" placeholder="Buscar por nombre o especialidad">
        </div>
        <div class="col-md-4">
            <select id="filterEspecialidad" class="form-select">
                <option value="">Todas las especialidades</option>
                <?php
                $sql_especialidades = "SELECT DISTINCT especialidad FROM medicos";
                $result_especialidades = $conn->query($sql_especialidades);
                while ($row_especialidad = $result_especialidades->fetch_assoc()) {
                    echo "<option value=\"" . $row_especialidad['especialidad'] . "\">" . $row_especialidad['especialidad'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-2">
            <button id="filterButton" class="btn btn-primary btn-block">Filtrar</button>
        </div>
    </div>

    <!-- Contenedor dinámico para médicos -->
    <div id="medicosContainer" class="row gy-4"></div>

    <!-- Paginación -->
    <div class="d-flex justify-content-between align-items-center mt-4">
        <div>
            <label for="resultadosPorPagina" class="form-label me-2">Resultados por página:</label>
            <select id="resultadosPorPagina" class="form-select w-auto d-inline-block">
                <option value="5" selected>5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
        </div>
        <nav>
            <ul class="pagination" id="paginationContainer"></ul>
        </nav>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const medicosContainer = document.getElementById('medicosContainer');
        const paginationContainer = document.getElementById('paginationContainer');
        const searchInput = document.getElementById('searchInput');
        const filterEspecialidad = document.getElementById('filterEspecialidad');
        const filterButton = document.getElementById('filterButton');
        const resultadosPorPaginaSelect = document.getElementById('resultadosPorPagina');

        let medicos = []; // Contendrá todos los médicos cargados
        let paginaActual = 1; // Página actual
        let resultadosPorPagina = parseInt(resultadosPorPaginaSelect.value); // Resultados por página

        <?php
        $medicos_data = [];
        $sql = "SELECT * FROM medicos";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $row['horarios'] = [];
            $sql_horarios = "SELECT * FROM horarios WHERE medico_id = " . $row['id'];
            $result_horarios = $conn->query($sql_horarios);
            while ($horario = $result_horarios->fetch_assoc()) {
                $row['horarios'][] = $horario;
            }
            $medicos_data[] = $row;
        }
        echo "medicos = " . json_encode($medicos_data) . ";";
        ?>

        // Renderizar médicos
        function renderMedicos() {
            const filtroBusqueda = searchInput.value.toLowerCase();
            const filtroEspecialidad = filterEspecialidad.value;
            const medicosFiltrados = medicos.filter(medico => {
                const coincideBusqueda = medico.nombre.toLowerCase().includes(filtroBusqueda) ||
                    medico.paterno.toLowerCase().includes(filtroBusqueda) ||
                    medico.materno.toLowerCase().includes(filtroBusqueda) ||
                    medico.especialidad.toLowerCase().includes(filtroBusqueda);
                const coincideEspecialidad = !filtroEspecialidad || medico.especialidad === filtroEspecialidad;
                return coincideBusqueda && coincideEspecialidad;
            });

            const totalPaginas = Math.ceil(medicosFiltrados.length / resultadosPorPagina);
            paginaActual = Math.min(paginaActual, totalPaginas); // Ajustar página actual si excede total

            const inicio = (paginaActual - 1) * resultadosPorPagina;
            const fin = inicio + resultadosPorPagina;
            const medicosPagina = medicosFiltrados.slice(inicio, fin);

            medicosContainer.innerHTML = medicosPagina.map(medico => {
                const horariosHTML = medico.horarios.map(horario => {
                    const dia = horario.dia.charAt(0).toUpperCase() + horario.dia.slice(1);
                    const manana = horario.inicio_m !== '00:00:00' ? `${horario.inicio_m.slice(0, 5)} - ${horario.fin_m.slice(0, 5)}` : '';
                    const tarde = horario.inicio_t !== '00:00:00' ? `${horario.inicio_t.slice(0, 5)} - ${horario.fin_t.slice(0, 5)}` : '';
                    const waLinkManana = `https://wa.me/51921883459?text=Hola,%20quiero%20una%20cita%20con%20${medico.sexo == '1' ? 'la Dra.' : 'el Dr.'} ${medico.nombre} en el horario ${dia} ${manana}`;
                    const waLinkTarde = `https://wa.me/51921883459?text=Hola,%20quiero%20una%20cita%20con%20${medico.sexo == '1' ? 'la Dra.' : 'el Dr.'} ${medico.nombre} en el horario ${dia} ${tarde}`;
                    return `
                        <p class="d-flex">
                            <strong class="me-2 text-end" style="width: 40%; text-align: right;">${dia}:</strong>
                            ${manana ? `<a href="${waLinkManana}" class="text-decoration-none text-info">${manana}</a>` : ''}
                            ${tarde ? ` | <a href="${waLinkTarde}" class="text-decoration-none text-info">${tarde}</a>` : ''}
                        </p>
                    `;
                }).join('');

                const waLink = `https://wa.me/51921883459?text=Hola,%20deseo%20una%20cita%20con%20${medico.sexo == '1' ? 'la Dra.' : 'el Dr.'} ${medico.nombre}`;

                return `
                    <div class="col-md-12">
                        <div class="card card-flush">
                            <div class="row align-items-center">
                                <div class="col-sm-2">
                                    <img class="card-img" src="/${medico.imagen}" alt="Foto de ${medico.nombre}">
                                </div>
                                <div class="col-sm-10">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase text-primary mb-5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    ${medico.sexo == '1' ? 'Dra.' : 'Dr.'} ${medico.nombre.toUpperCase()} ${medico.paterno.toUpperCase()} ${medico.materno.toUpperCase()}
                                                    <p class="text-muted mb-2 text-uppercase" style="font-size: 0.9rem;">
                                                        ${medico.especialidad.toUpperCase()}
                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="${waLink}" class="btn btn-success btn-sm" target="_blank">
                                                        <i class="fab fa-whatsapp"></i> Solicitar cita
                                                    </a>
                                                </div>
                                            </div>
                                        </h5>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p class="card-text mb-2">
                                                    <strong>CMP:</strong> ${medico.cmp} <br>
                                                    <strong>RNE:</strong> ${medico.rne || 'N/A'}
                                                </p>
                                            </div>
                                            <div class="col-md-5">
                                                ${horariosHTML}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');

            paginationContainer.innerHTML = Array.from({ length: totalPaginas }, (_, i) => `
                <li class="page-item ${paginaActual === i + 1 ? 'active' : ''}">
                    <a href="#" class="page-link" data-page="${i + 1}">${i + 1}</a>
                </li>
            `).join('');

            paginationContainer.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    paginaActual = parseInt(this.dataset.page);
                    renderMedicos();
                });
            });
        }

        filterButton.addEventListener('click', renderMedicos);
        searchInput.addEventListener('keyup', renderMedicos);
        resultadosPorPaginaSelect.addEventListener('change', () => {
            resultadosPorPagina = parseInt(resultadosPorPaginaSelect.value);
            renderMedicos();
        });

        renderMedicos();
    });
</script>
