<?php
    include __DIR__ . '/db.php';
    header('Content-Type: application/json');
    echo json_encode([
      'results' => $autousate,
      'length' => count($autousate)]);
?>