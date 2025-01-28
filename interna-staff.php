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
    $horarios[ucfirst($horario['dia'])] = [
        'previa_cita' => $horario['previa_cita'],
        'manana' => ($horario['inicio_m'] && $horario['fin_m']) 
            ? date("H:i", strtotime($horario['inicio_m'])) . " - " . date("H:i", strtotime($horario['fin_m'])) 
            : null,
        'tarde' => ($horario['inicio_t'] && $horario['fin_t']) 
            ? date("H:i", strtotime($horario['inicio_t'])) . " - " . date("H:i", strtotime($horario['fin_t'])) 
            : null
    ];
}
$stmt_horarios->close();
?>

<section class="container my-5">
    <div class="row">
        <!-- Foto del Médico -->
        <div class="col-md-4 text-center">
            <img class="img-fluid rounded-circle shadow-sm" 
                 src="/<?php echo htmlspecialchars($medico['imagen'], ENT_QUOTES, 'UTF-8'); ?>" 
                 alt="Foto de <?php echo htmlspecialchars($medico['nombre'], ENT_QUOTES, 'UTF-8'); ?>">
        </div>

        <!-- Información del Médico -->
        <div class="col-md-8">
            <h1 class="text-primary">
                <?php echo htmlspecialchars(($medico['sexo'] == '1' ? 'Dra.' : 'Dr.') . ' ' . $medico['nombre'] . ' ' . $medico['paterno'] . ' ' . $medico['materno']); ?>
            </h1>
            <h2 class="h5 text-muted text-uppercase"><?php echo htmlspecialchars($medico['especialidad'], ENT_QUOTES, 'UTF-8'); ?></h2>
            <p>
                <strong>CMP:</strong> <?php echo htmlspecialchars($medico['cmp'], ENT_QUOTES, 'UTF-8'); ?><br>
                <strong>RNE:</strong> <?php echo $medico['rne'] ? htmlspecialchars($medico['rne'], ENT_QUOTES, 'UTF-8') : 'N/A'; ?>
            </p>
        </div>
    </div>

    <!-- Horarios -->
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="text-primary">Horarios de Atención</h3>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Día</th>
                        <th>Previa Cita</th>
                        <th>Horario Mañana</th>
                        <th>Horario Tarde</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($horarios as $dia => $detalles): ?>
                        <tr>
                            <td><?php echo $dia; ?></td>
                            <td>
                                <?php echo $detalles['previa_cita'] 
                                    ? '<span class="badge bg-success">Sí</span>' 
                                    : '<span class="badge bg-danger">No</span>'; ?>
                            </td>
                            <td>
                                <?php echo $detalles['manana'] 
                                    ? htmlspecialchars($detalles['manana'], ENT_QUOTES, 'UTF-8') 
                                    : 'N/A'; ?>
                            </td>
                            <td>
                                <?php echo $detalles['tarde'] 
                                    ? htmlspecialchars($detalles['tarde'], ENT_QUOTES, 'UTF-8') 
                                    : 'N/A'; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

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
