<?php
// Файл: api.php
// Модуль логирования эфира ИС "AuraFM"

header('Content-Type: application/json; charset=utf-8');

// Имитация подключения к БД (в реальной среде здесь был бы mysqli_connect)
$db_connected = true; 

$action = $_POST['action'] ?? '';

if ($action === 'log_track') {
    $track_id = (int)($_POST['track_id'] ?? 0);
    $show_id  = (int)($_POST['show_id'] ?? 0);

    // ДЕФЕКТ №1 (намеренный для МДК 05.03): Сообщение об ошибке на английском
    if ($track_id <= 0 || $show_id <= 0) {
        echo json_encode(['success' => false, 'message' => 'Error: invalid track or show ID']);
        exit;
    }

    if ($db_connected) {
        // Имитация транзакции: INSERT в broadcast_log и UPDATE play_count
        echo json_encode([
            'success' => true, 
            'message' => 'Трек успешно залогирован в эфир'
        ]);
    }
}
?>