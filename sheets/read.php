<?php
include 'sheets.php';
header("Access-Control-Allow-Origin: *");

echo json_encode(getSheets());
