<?php
function getSheets()
{
    return json_decode(file_get_contents('sheets.json'), true);
}


function createSheet($data)
{
    $Sheets = getSheets();

    //$data['id'] = rand(1000000, 2000000);

    $Sheets[] = $data;

    putJson($Sheets);

    //return $data;
}

function deleteAllSheets()
{
    //$Sheets = getSheets();
    //unset($Sheets);
    // foreach ($Sheets as $i => $Sheet) {
    //     if ($Sheet['id'] == $id) {
    //         array_splice($Sheets, $i, 1);
    //     }
    // }

    putJson([]);
}
function deleteFirstSheet()
{
    $Sheets = getSheets();
    array_shift($Sheets);
    putJson($Sheets);
}
function putJson($Sheets)
{
    file_put_contents('sheets.json', json_encode($Sheets, JSON_PRETTY_PRINT));
}
