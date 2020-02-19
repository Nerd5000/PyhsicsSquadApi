<?php
function sendJson()
{
    return file_get_contents('schedule.json');
}

echo sendJson();
