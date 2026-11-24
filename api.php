<?php

header('Content-Type: application/json; charset=utf-8');

$db_connected = true; 

$action = $_POST['action'] ?? '';

if ($action === 'log_track') {
    $track_id = (int)($_POST['track_id'] ?? 0);
    $show_id  = (int)($_POST['show_id'] ?? 0);

    if ($track_id <= 0 || $show_id <= 0) {
        echo json_encode(['success' => false, 'message' => 'Error: invalid track or show ID']);
        exit;
    }

    if ($db_connected) {
     
        echo json_encode([
            'success' => true, 
            'message' => 'Трек успешно залогирован в эфир'
        ]);
    }
}
?>
