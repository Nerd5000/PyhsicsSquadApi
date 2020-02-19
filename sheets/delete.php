<?php
include 'sheets.php';
header("Access-Control-Allow-Origin: *");


if (!isset($_GET['all'])) {
    exit;
}

if ($_GET['all'] == 'true') {
    deleteAllSheets();
} elseif ($_GET['all'] == 'false') {
    deleteFirstSheet();
}
echo 'done';
