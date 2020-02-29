<?php
include 'sheets.php';
header("Access-Control-Allow-Origin: *");


if (isset($_GET['all']) || isset($_GET['first']) || isset($_GET['first'])) {

    if ($_GET['all'] == 'true') {
        deleteAllSheets();
    } elseif ($_GET['first'] == 'true') {
        deleteFirstSheet();
    } elseif ($_GET['last'] == 'true') {
        deleteLastSheet();
    }
    echo 'done';
} else {
    exit;
}
