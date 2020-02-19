<?php
include 'sheets.php';
header("Access-Control-Allow-Origin: *");


$json = file_get_contents('php://input');

$data = json_decode($json, true);
if (array_key_exists('dname', $data) || array_key_exists('day', $data) || array_key_exists('todo', $data)) {
    createSheet($data);
    echo 'done';
} else {
    exit;
}


// if (!isset($_GET['dname']) || !isset($_GET['day']) || !isset($_GET['todo'])) {
//     exit;
// }

// $drname = $_GET['doctorname'];
// $day = $_GET['day'];
// $todo = $_GET['todo'];
// $sheet = array("doctorname" => $drname, "day" => $day, "todo" => $todo);
// createSheet($sheet);
// echo 'done';
