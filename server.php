<?php
$records = json_decode(file_get_contents('records.json'), true);

header('Content-Type: application/json');

echo json_encode($records);
