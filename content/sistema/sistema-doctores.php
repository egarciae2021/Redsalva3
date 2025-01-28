<section class="fondo-azul content-space-3  d-block d-md-none">
    <div class="container pt-3 mb-n5">
        <div class="row">
            <div class="col-12 mt-2">
                <h1 class="h4 color-naranja"><?php echo $h1; ?></h1>
            </div>
            <div class="mb-0">
                <a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
            </div>
        </div>
    </div>
</section>
<img src="<?php echo $page_image; ?>" class="img-fluid mt-n5 d-block d-md-none" alt="<?php echo $h1; ?>">
<section class="fondo-azul content-space-3 d-none d-md-block">
    <div class="container pt-3 mb-n5">
        <div class="row position-relative">
            <div class="position-md-absolute top-0 col-md-7 offset-md-5 h-100">
                <div class="bg-img-center card-img">
                    <img class="img-fluid rounded-3" src="<?php echo $page_image; ?>" alt="<?php echo $h1; ?>">
                </div>
            </div>
            <div class="col-10 col-md-7 col-lg-6 offset-1 offset-md-0 content-space-md-1">
                <div class="position-relative fondo-celeste-bajo rounded-3 zi-1 p-6 mt-5 mb-5 pe-6 shadow-sm">
                    <div class="mb-2 mt-5">
                        <h1 class="h4 color-azul"><?php echo $h1; ?></h1>
                    </div>
                    <div class="mb-5">
                        <a class="link color-azul color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
<?php
require_once 'db_connection.php'; // Asegúrate de tener la conexión a la base de datos configurada

// Obtener la lista de doctores
$sql = "SELECT id, nombre, paterno FROM medicos";
$result = $conn->query($sql);
?>

    <div class="container my-5">
        <h1 class="text-center">Listado de Doctores</h1>
        <div id="doctorContainer">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="selectAll"></th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="doctor_ids[]" value="<?php echo $row['id']; ?>">
                            </td>
                            <td><?php echo htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($row['nombre'] . ' ' . $row['paterno'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td>
                                <!-- Botón Editar -->
                                <div class="d-inline">
                                    <button 
                                        class="btn btn-warning btn-editar" 
                                        data-id="<?php echo $row['id']; ?>"
                                    >
                                        Editar
                                    </button>
                                </div>
                                <!-- Botón Eliminar -->
                                <div class="d-inline">
                                    <button 
                                        class="btn btn-danger btn-eliminar" 
                                        data-id="<?php echo $row['id']; ?>"
                                    >
                                        Eliminar
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        // Seleccionar todos los checkboxes
        document.getElementById('selectAll').addEventListener('change', function () {
            const checkboxes = document.querySelectorAll('input[name="doctor_ids[]"]');
            checkboxes.forEach(checkbox => checkbox.checked = this.checked);
        });

        // Eventos para los botones Editar y Eliminar
        document.querySelectorAll('.btn-editar').forEach(button => {
            button.addEventListener('click', function () {
                const doctorId = this.getAttribute('data-id');
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '/sistema/editar-doctor';
                
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'id';
                input.value = doctorId;
                
                form.appendChild(input);
                document.body.appendChild(form);
                form.submit();
            });
        });

        document.querySelectorAll('.btn-eliminar').forEach(button => {
            button.addEventListener('click', function () {
                const doctorId = this.getAttribute('data-id');
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '/sistema/eliminar-doctor';
                
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'id';
                input.value = doctorId;
                
                form.appendChild(input);
                document.body.appendChild(form);
                form.submit();
            });
        });
    </script>
</section>
