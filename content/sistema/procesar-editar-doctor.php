<?php
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $doctor_id = intval($_POST['id']);

    // Validar ID del doctor
    if ($doctor_id <= 0) {
        die("ID de doctor no válido.");
    }

    // Obtener los datos del formulario
    $nombre = trim($_POST['nombre']);
    $paterno = trim($_POST['paterno']);
    $materno = trim($_POST['materno']);
    $especialidad = trim($_POST['especialidad']);
    $cmp = trim($_POST['cmp']);
    $rne = trim($_POST['rne']);
    $foto_actual = trim($_POST['foto_actual']);

    // Manejar la subida de una nueva foto
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "images/staff/";
        $ext = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
        $new_filename = uniqid() . '.' . $ext;
        $target_file = $target_dir . $new_filename;

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
            $foto_actual = $target_file; // Actualizar con la nueva foto
        }
    }

    // Actualizar datos del doctor
    $sql_update_doctor = "UPDATE medicos SET nombre = ?, paterno = ?, materno = ?, especialidad = ?, cmp = ?, rne = ?, imagen = ? WHERE id = ?";
    $stmt_doctor = $conn->prepare($sql_update_doctor);
    $stmt_doctor->bind_param('sssssssi', $nombre, $paterno, $materno, $especialidad, $cmp, $rne, $foto_actual, $doctor_id);
    $stmt_doctor->execute();
    $stmt_doctor->close();

    // Procesar horarios
    if (isset($_POST['horarios']) && is_array($_POST['horarios'])) {
        foreach ($_POST['horarios'] as $id_horario => $datos) {
            $previa_cita = isset($datos['previa_cita']) ? 1 : 0;
            $inicio_m = !empty($datos['inicio_m']) ? $datos['inicio_m'] : NULL;
            $fin_m = !empty($datos['fin_m']) ? $datos['fin_m'] : NULL;
            $inicio_t = !empty($datos['inicio_t']) ? $datos['inicio_t'] : NULL;
            $fin_t = !empty($datos['fin_t']) ? $datos['fin_t'] : NULL;

            $sql_update_horario = "UPDATE horarios SET previa_cita = ?, inicio_m = ?, fin_m = ?, inicio_t = ?, fin_t = ? WHERE id = ? AND medico_id = ?";
            $stmt_horario = $conn->prepare($sql_update_horario);
            $stmt_horario->bind_param('issssii', $previa_cita, $inicio_m, $fin_m, $inicio_t, $fin_t, $id_horario, $doctor_id);
            $stmt_horario->execute();
            $stmt_horario->close();
        }
    }

    // Mostrar resultados
    echo "
    <section class='container my-5'>
        <h1 class='text-center'>Datos Actualizados</h1>
        <p><strong>Nombre:</strong> {$nombre} {$paterno} {$materno}</p>
        <p><strong>Especialidad:</strong> {$especialidad}</p>
        <p><strong>CMP:</strong> {$cmp}</p>
        <p><strong>RNE:</strong> {$rne}</p>
        <h2 class='mt-4'>Horarios Actualizados:</h2>";

    $sql_get_horarios = "SELECT * FROM horarios WHERE medico_id = ?";
    $stmt_get_horarios = $conn->prepare($sql_get_horarios);
    $stmt_get_horarios->bind_param('i', $doctor_id);
    $stmt_get_horarios->execute();
    $result_horarios = $stmt_get_horarios->get_result();
    while ($horario = $result_horarios->fetch_assoc()) {
        echo "<p><strong>" . ucfirst($horario['dia']) . ":</strong> Mañana: " .
            ($horario['inicio_m'] ? $horario['inicio_m'] : 'N/A') . " - " .
            ($horario['fin_m'] ? $horario['fin_m'] : 'N/A') . ", Tarde: " .
            ($horario['inicio_t'] ? $horario['inicio_t'] : 'N/A') . " - " .
            ($horario['fin_t'] ? $horario['fin_t'] : 'N/A') . "</p>";
    }
    $stmt_get_horarios->close();

    echo "<a href='/sistema/sistema-doctores' class='btn btn-primary mt-4'>Volver al Listado</a></section>";
}
?>
