<?php
//$records = json_decode(file_get_contents('records.json'), true);
$records = file_get_contents('records.json');


header('Content-Type: application/json');

echo $records;
//echo json_encode($records);
