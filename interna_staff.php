<?php
require_once 'db_connection.php';

// Obtener la URL actual
$current_url = $_SERVER['REQUEST_URI'];
$url_parts = explode('/', trim($current_url, '/'));
$slug = end($url_parts); // Última parte de la URL

// Consultar el médico por el slug
$sql_medico = "SELECT * FROM medicos WHERE url = ?";
$stmt = $conn->prepare($sql_medico);
$stmt->bind_param('s', $slug);
$stmt->execute();
$result_medico = $stmt->get_result();
$medico = $result_medico->fetch_assoc();
$stmt->close();

if (!$medico) {
    die("Médico no encontrado.");
}

// Consultar los horarios del médico
$sql_horarios = "SELECT * FROM horarios WHERE medico_id = ?";
$stmt_horarios = $conn->prepare($sql_horarios);
$stmt_horarios->bind_param('i', $medico['id']);
$stmt_horarios->execute();
$result_horarios = $stmt_horarios->get_result();
$horarios = [];
while ($horario = $result_horarios->fetch_assoc()) {
    // Filtrar horarios válidos (diferentes de '00:00:00')
    $manana = ($horario['inicio_m'] && $horario['fin_m'] && $horario['inicio_m'] !== '00:00:00')
        ? date("H:i", strtotime($horario['inicio_m'])) . " - " . date("H:i", strtotime($horario['fin_m']))
        : null;

    $tarde = ($horario['inicio_t'] && $horario['fin_t'] && $horario['inicio_t'] !== '00:00:00')
        ? date("H:i", strtotime($horario['inicio_t'])) . " - " . date("H:i", strtotime($horario['fin_t']))
        : null;

    if ($manana || $tarde || $horario['previa_cita']) {
        $horarios[ucfirst($horario['dia'])] = [
            'previa_cita' => $horario['previa_cita'],
            'manana' => $manana,
            'tarde' => $tarde
        ];
    }
}
$stmt_horarios->close();
?>

<div class="fondo-azul">
    <div class="container content-space-t-lg-4 content-space-b-1">
        <h1 class="color-white"><?php echo htmlspecialchars(($medico['sexo'] == '1' ? 'Dra.' : 'Dr.') . ' ' . $medico['nombre'] . ' ' . $medico['paterno'] . ' ' . $medico['materno']); ?></h1>
        <div class="mb-3">
            <a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
        </div>
    </div>
</div>
<section class="container my-5">
    <div class="row">
        <!-- Foto del Médico -->
        <div class="col-md-4 text-center">
            <img class="img-fluid shadow-sm w-100" 
                 src="/<?php echo htmlspecialchars($medico['imagen'], ENT_QUOTES, 'UTF-8'); ?>" 
                 alt="Foto de <?php echo htmlspecialchars($medico['nombre'], ENT_QUOTES, 'UTF-8'); ?>">
        </div>

        <!-- Información del Médico -->
        <div class="col-md-8">
            <h2 class="h5 text-muted text-uppercase"><?php echo htmlspecialchars($medico['especialidad'], ENT_QUOTES, 'UTF-8'); ?></h2>
            <p>
                <strong>CMP:</strong> <?php echo htmlspecialchars($medico['cmp'], ENT_QUOTES, 'UTF-8'); ?><br>
                <strong>RNE:</strong> <?php echo $medico['rne'] ? htmlspecialchars($medico['rne'], ENT_QUOTES, 'UTF-8') : 'N/A'; ?>
            </p>
            <div class="row mt-5">
    <div class="col-12">
        <h3 class="text-primary">Horarios de Atención</h3>
        <?php if (!empty($horarios)): ?>
            <?php
            // Determinar qué columnas mostrar
            $mostrarPreviaCita = false;
            $mostrarManana = false;
            $mostrarTarde = false;

            foreach ($horarios as $detalles) {
                if ($detalles['previa_cita']) {
                    $mostrarPreviaCita = true;
                }
                if ($detalles['manana']) {
                    $mostrarManana = true;
                }
                if ($detalles['tarde']) {
                    $mostrarTarde = true;
                }
            }
            ?>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Día</th>
                        <?php if ($mostrarPreviaCita): ?>
                            <th>Previa Cita</th>
                        <?php endif; ?>
                        <?php if ($mostrarManana): ?>
                            <th>Horario 1</th>
                        <?php endif; ?>
                        <?php if ($mostrarTarde): ?>
                            <th>Horario 2</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($horarios as $dia => $detalles): ?>
                        <tr>
                            <td><?php echo $dia; ?></td>
                            <?php if ($mostrarPreviaCita): ?>
                                <td>
                                    <?php if ($detalles['previa_cita']): ?>
                                        <a href="https://wa.me/51921883459?text=Hola,%20quiero%20una%20cita%20con%20<?php echo urlencode(($medico['sexo'] == '1' ? 'Dra.' : 'Dr.') . ' ' . $medico['nombre'] . ' ' . $medico['paterno'] . ' ' . $medico['materno'] . ' el ' . $dia . ' bajo modalidad previa cita'); ?>"
                                           class="color-azul color-naranja-hover"
                                           data-bs-toggle="tooltip"
                                           title="Reservar cita el <?php echo $dia; ?>">Previa Cita</a>
                                    <?php endif; ?>
                                </td>
                            <?php endif; ?>
                            <?php if ($mostrarManana): ?>
                                <td>
                                    <?php if ($detalles['manana']): ?>
                                        <a href="https://wa.me/51921883459?text=Hola,%20quiero%20una%20cita%20con%20<?php echo urlencode(($medico['sexo'] == '1' ? 'Dra.' : 'Dr.') . ' ' . $medico['nombre'] . ' ' . $medico['paterno'] . ' ' . $medico['materno'] . ' el ' . $dia . ' a las ' . $detalles['manana']); ?>"
                                           class="color-azul color-naranja-hover"
                                           data-bs-toggle="tooltip"
                                           title="Reservar cita el <?php echo $dia; ?> a las <?php echo $detalles['manana']; ?>"><?php echo htmlspecialchars($detalles['manana']); ?></a>
                                    <?php endif; ?>
                                </td>
                            <?php endif; ?>
                            <?php if ($mostrarTarde): ?>
                                <td>
                                    <?php if ($detalles['tarde']): ?>
                                        <a href="https://wa.me/51921883459?text=Hola,%20quiero%20una%20cita%20con%20<?php echo urlencode(($medico['sexo'] == '1' ? 'Dra.' : 'Dr.') . ' ' . $medico['nombre'] . ' ' . $medico['paterno'] . ' ' . $medico['materno'] . ' el ' . $dia . ' a las ' . $detalles['tarde']); ?>"
                                           class="color-azul color-naranja-hover"
                                           data-bs-toggle="tooltip"
                                           title="Reservar cita el <?php echo $dia; ?> a las <?php echo $detalles['tarde']; ?>"><?php echo htmlspecialchars($detalles['tarde']); ?></a>
                                    <?php endif; ?>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay horarios disponibles.</p>
        <?php endif; ?>
    </div>
</div>
        </div>
    </div>

    <!-- Horarios -->



    <!-- Botón de WhatsApp -->
    <div class="row mt-4">
        <div class="col-12 text-center">
            <a href="https://wa.me/51921883459?text=Hola,%20deseo%20una%20cita%20con%20<?php echo urlencode(($medico['sexo'] == '1' ? 'Dra.' : 'Dr.') . ' ' . $medico['nombre'] . ' ' . $medico['paterno'] . ' ' . $medico['materno']); ?>"
               class="btn btn-success btn-lg rounded-pill" target="_blank">
                <i class="fab fa-whatsapp"></i> Solicitar Cita
            </a>
        </div>
    </div>
</section>
