<?php
require_once 'db_connection.php'; // Conexión a la base de datos

function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Datos básicos
    $nombre = sanitize($_POST['nombre']);
    $paterno = sanitize($_POST['paterno']);
    $materno = sanitize($_POST['materno']);
    $especialidad = sanitize($_POST['especialidad']);
    $cmp = str_pad(sanitize($_POST['cmp']), 5, '0', STR_PAD_LEFT);
    $rne = !empty($_POST['rne']) ? str_pad(sanitize($_POST['rne']), 5, '0', STR_PAD_LEFT) : null;
    $sexo = sanitize($_POST['sexo']);

    // Generar URL dinámica
    $titulo = $sexo === '1' ? 'dra' : 'dr';
    $url_slug = strtolower("$titulo-$nombre-$paterno-$materno");
    $url_slug = preg_replace('/[^a-z0-9\-]/', '', str_replace(' ', '-', $url_slug));

    // Horarios
    $dias = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'];
    $horarios = [];
    foreach ($dias as $dia) {
        $previa_cita = isset($_POST["{$dia}_previa"]) ? 1 : 0; // Valor del checkbox
        $inicio_m = $_POST["{$dia}_inicio_m"] ?? null;
        $fin_m = $_POST["{$dia}_fin_m"] ?? null;
        $inicio_t = $_POST["{$dia}_inicio_t"] ?? null;
        $fin_t = $_POST["{$dia}_fin_t"] ?? null;

        // Agregar el horario solo si alguno de los campos tiene un valor válido o es previa cita
        if ($previa_cita || !empty($inicio_m) || !empty($fin_m) || !empty($inicio_t) || !empty($fin_t)) {
            $horarios[$dia] = [
                'previa_cita' => $previa_cita,
                'inicio_m' => $inicio_m,
                'fin_m' => $fin_m,
                'inicio_t' => $inicio_t,
                'fin_t' => $fin_t,
            ];
        }
    }

    // Foto
    $imagen = 'images/staff/default.jpg'; // Imagen predeterminada
    if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $ext = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
        $filename = uniqid() . '.' . $ext;
        $target_dir = 'images/staff/';
        if (!is_dir($target_dir)) mkdir($target_dir, 0755, true);
        $imagen = $target_dir . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], $imagen);
    }

    // Guardar en base de datos
    $sql = "INSERT INTO medicos (nombre, paterno, materno, especialidad, cmp, rne, sexo, imagen, url) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssss', $nombre, $paterno, $materno, $especialidad, $cmp, $rne, $sexo, $imagen, $url_slug);
    if ($stmt->execute()) {
        $medico_id = $stmt->insert_id;
        $stmt->close();

        // Guardar horarios
        if (!empty($horarios)) {
            $sql_horarios = "INSERT INTO horarios (medico_id, dia, previa_cita, inicio_m, fin_m, inicio_t, fin_t) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt_horarios = $conn->prepare($sql_horarios);
            foreach ($horarios as $dia => $horario) {
                $stmt_horarios->bind_param(
                    'isissss',
                    $medico_id,
                    $dia,
                    $horario['previa_cita'],
                    $horario['inicio_m'],
                    $horario['fin_m'],
                    $horario['inicio_t'],
                    $horario['fin_t']
                );
                $stmt_horarios->execute();
            }
            $stmt_horarios->close();
        }

        // Crear archivo PHP
        $ruta_archivo = $_SERVER['DOCUMENT_ROOT'] . "/content/staff/$url_slug.php";
        if (!is_dir(dirname($ruta_archivo))) {
            mkdir(dirname($ruta_archivo), 0755, true);
        }

        $contenido = <<<PHP
<?php
    require_once('interna_staff.php'); ?>
?>
PHP;

        file_put_contents($ruta_archivo, $contenido);

        // Mostrar resultados en la vista
        echo <<<HTML
<section class="container my-5">
    <h1 class="text-center text-success">Registro Exitoso</h1>
    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <h3 class="card-title">Datos del Doctor</h3>
            <p><strong>Nombre:</strong> $nombre $paterno $materno</p>
            <p><strong>Especialidad:</strong> $especialidad</p>
            <p><strong>CMP:</strong> $cmp</p>
            <p><strong>RNE:</strong> $rne</p>
            <p><strong>Foto:</strong> <img src="/$imagen" alt="Foto de $nombre $paterno" width="150" class="img-thumbnail"></p>
            <h4>Horarios Registrados:</h4>
HTML;

        foreach ($horarios as $dia => $horario) {
            $inicio_m = $horario['inicio_m'] ?? 'N/A';
            $fin_m = $horario['fin_m'] ?? 'N/A';
            $inicio_t = $horario['inicio_t'] ?? 'N/A';
            $fin_t = $horario['fin_t'] ?? 'N/A';
            echo "<p><strong>" . ucfirst($dia) . ":</strong> Mañana: $inicio_m - $fin_m, Tarde: $inicio_t - $fin_t</p>";
        }

        echo <<<HTML
            <div class="mt-4 text-center">
                <a href="/sistema/sistema-doctores" class="btn btn-primary">Volver al Listado</a>
                <a href="/sistema/nuevo-doctor" class="btn btn-primary">Agregar otro</a>
            </div>
        </div>
    </div>
</section>
HTML;
    } else {
        // Mostrar error en la vista
        echo <<<HTML
<section class="container my-5">
    <h1 class="text-center text-danger">Error en el Registro</h1>
    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <h3 class="card-title text-danger">No se pudo registrar el doctor.</h3>
            <p>Ocurrió un error al intentar guardar los datos. Por favor, intenta nuevamente.</p>
            <div class="mt-4 text-center">
                <a href="/sistema/sistema-doctores" class="btn btn-secondary">Volver al Listado</a>
                <a href="/sistema/nuevo-doctor" class="btn btn-primary">Intentar de Nuevo</a>
            </div>
        </div>
    </div>
</section>
HTML;
    }
}
?>
