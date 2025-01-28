<?php
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $doctor_id = intval($_POST['id']);

    // Validar el ID del doctor
    if ($doctor_id <= 0) {
        die("ID de doctor no válido.");
    }

    // Obtener datos del doctor
    $sql_doctor = "SELECT * FROM medicos WHERE id = ?";
    $stmt_doctor = $conn->prepare($sql_doctor);
    $stmt_doctor->bind_param('i', $doctor_id);
    $stmt_doctor->execute();
    $result_doctor = $stmt_doctor->get_result();
    $doctor = $result_doctor->fetch_assoc();
    $stmt_doctor->close();

    // Obtener horarios del doctor
    $sql_horarios = "SELECT * FROM horarios WHERE medico_id = ?";
    $stmt_horarios = $conn->prepare($sql_horarios);
    $stmt_horarios->bind_param('i', $doctor_id);
    $stmt_horarios->execute();
    $result_horarios = $stmt_horarios->get_result();
    $horarios = $result_horarios->fetch_all(MYSQLI_ASSOC);
    $stmt_horarios->close();
}
?>
<section class="container my-5">
    <h1 class="text-center">Editar Doctor</h1>

    <?php if (isset($doctor)): ?>
        <form action="/sistema/procesar-editar-doctor" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $doctor_id; ?>">
            <input type="hidden" name="foto_actual" value="<?php echo htmlspecialchars($doctor['imagen']); ?>">

            <!-- Datos básicos -->
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo htmlspecialchars($doctor['nombre']); ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="paterno" class="form-label">Apellido Paterno</label>
                    <input type="text" name="paterno" id="paterno" class="form-control" value="<?php echo htmlspecialchars($doctor['paterno']); ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="materno" class="form-label">Apellido Materno</label>
                    <input type="text" name="materno" id="materno" class="form-control" value="<?php echo htmlspecialchars($doctor['materno']); ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="especialidad" class="form-label">Especialidad</label>
                    <select name="especialidad" id="especialidad" class="form-select" required>
                        <option value="">Seleccionar Especialidad</option>
                        <?php include 'lista_especialidades.php'; ?>
                        <?php if (!empty($doctor['especialidad'])): ?>
                            <option value="<?php echo htmlspecialchars($doctor['especialidad']); ?>" selected>
                                <?php echo htmlspecialchars($doctor['especialidad']); ?>
                            </option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="cmp" class="form-label">CMP</label>
                    <input type="text" name="cmp" id="cmp" class="form-control" value="<?php echo htmlspecialchars($doctor['cmp']); ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="rne" class="form-label">RNE</label>
                    <input type="text" name="rne" id="rne" class="form-control" value="<?php echo htmlspecialchars($doctor['rne']); ?>">
                </div>
                <div class="col-md-12">
                    <label for="foto" class="form-label">Foto Actual</label>
                    <div class="mb-3">
                        <img src="/<?php echo htmlspecialchars($doctor['imagen']); ?>" alt="Foto de <?php echo htmlspecialchars($doctor['nombre']); ?>" width="150" class="img-thumbnail">
                    </div>
                    <label for="foto" class="form-label">Cambiar Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
                </div>
            </div>

            <!-- Horarios -->
            <h3 class="mt-4">Horarios</h3>
            <div class="row g-4">
                <?php foreach ($horarios as $horario): ?>
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo ucfirst($horario['dia']); ?></h5>
                                <div class="form-check form-switch mb-3">
                                    <input 
                                        class="form-check-input previa-cita-checkbox" 
                                        type="checkbox" 
                                        name="horarios[<?php echo $horario['id']; ?>][previa_cita]" 
                                        id="previaCita_<?php echo $horario['id']; ?>" 
                                        <?php echo $horario['previa_cita'] ? 'checked' : ''; ?>
                                    >
                                    <label class="form-check-label" for="previaCita_<?php echo $horario['id']; ?>">
                                        Previa Cita
                                    </label>
                                </div>
                                <div class="row g-2 horario-fields">
                                    <div class="col-6">
                                        <label for="inicio_m_<?php echo $horario['id']; ?>" class="form-label">Inicio Mañana</label>
                                        <input 
                                            type="time" 
                                            name="horarios[<?php echo $horario['id']; ?>][inicio_m]" 
                                            id="inicio_m_<?php echo $horario['id']; ?>" 
                                            class="form-control" 
                                            value="<?php echo $horario['inicio_m'] ?? ''; ?>" 
                                            <?php echo $horario['previa_cita'] ? 'disabled' : ''; ?>
                                        >
                                    </div>
                                    <div class="col-6">
                                        <label for="fin_m_<?php echo $horario['id']; ?>" class="form-label">Fin Mañana</label>
                                        <input 
                                            type="time" 
                                            name="horarios[<?php echo $horario['id']; ?>][fin_m]" 
                                            id="fin_m_<?php echo $horario['id']; ?>" 
                                            class="form-control" 
                                            value="<?php echo $horario['fin_m'] ?? ''; ?>" 
                                            <?php echo $horario['previa_cita'] ? 'disabled' : ''; ?>
                                        >
                                    </div>
                                    <div class="col-6">
                                        <label for="inicio_t_<?php echo $horario['id']; ?>" class="form-label">Inicio Tarde</label>
                                        <input 
                                            type="time" 
                                            name="horarios[<?php echo $horario['id']; ?>][inicio_t]" 
                                            id="inicio_t_<?php echo $horario['id']; ?>" 
                                            class="form-control" 
                                            value="<?php echo $horario['inicio_t'] ?? ''; ?>" 
                                            <?php echo $horario['previa_cita'] ? 'disabled' : ''; ?>
                                        >
                                    </div>
                                    <div class="col-6">
                                        <label for="fin_t_<?php echo $horario['id']; ?>" class="form-label">Fin Tarde</label>
                                        <input 
                                            type="time" 
                                            name="horarios[<?php echo $horario['id']; ?>][fin_t]" 
                                            id="fin_t_<?php echo $horario['id']; ?>" 
                                            class="form-control" 
                                            value="<?php echo $horario['fin_t'] ?? ''; ?>" 
                                            <?php echo $horario['previa_cita'] ? 'disabled' : ''; ?>
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Botones -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                <a href="/sistema/listar-doctores" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    <?php else: ?>
        <p class="text-center text-danger">Doctor no encontrado.</p>
    <?php endif; ?>
</section>


<script>
    document.querySelectorAll('.previa-cita-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const card = this.closest('.card');
            const inputs = card.querySelectorAll('.horario-fields input');
            inputs.forEach(input => input.disabled = this.checked);
        });
    });
</script>
