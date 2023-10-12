<?php
$records = json_decode(file_get_contents('records.json'), true);
//$records = file_get_contents('records.json');

if (isset($_POST['newRecord'])) {
    $newRecord =  $_POST['newRecord'];

    array_unshift($records, $newRecord);

    $records_json = json_encode($records);

    file_put_contents('records.json', $records_json);
}

header('Content-Type: application/json');

echo json_encode($records);
//echo $records;
