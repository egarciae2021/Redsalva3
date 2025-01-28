<?php
require_once('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar los IDs
    $ids = $_POST['ids'] ?? [$_POST['id']];

    if (!empty($ids)) {
        try {
            // Iniciar transacción
            $conn->begin_transaction();

            // Eliminar horarios asociados
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $stmt = $conn->prepare("DELETE FROM horarios WHERE medico_id IN ($placeholders)");
            $stmt->bind_param(str_repeat('i', count($ids)), ...$ids);
            $stmt->execute();

            // Eliminar doctores
            $stmt = $conn->prepare("DELETE FROM medicos WHERE id IN ($placeholders)");
            $stmt->bind_param(str_repeat('i', count($ids)), ...$ids);
            $stmt->execute();

            // Confirmar transacción
            $conn->commit();

            echo json_encode(['success' => true]);
        } catch (Exception $e) {
            // Revertir transacción en caso de error
            $conn->rollback();
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'No se enviaron IDs.']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Método inválido.']);
}
?>
