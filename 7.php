<?php
function getTime($time = null)
{
    $time !== null || $time = date("H:i"); //Если время не задано пользователем, берем текущее
    sscanf($time, "%d:%d", $hours, $minutes);
    switch ($hours) {
        case(0):
            $hours = "$hours часов";
            break;
        case(1):
        case(21):
            $hours = "$hours час ";
            break;
        case(preg_match('/^[2]?[234]+/m', $hours) ? true : false):
            $hours = "$hours часа";
            break;
        default:
            $hours = "$hours часов";
            break;
    }
    switch ($minutes) {
        case(preg_match('/[056789]$/', $minutes) ? true : false):
        case(preg_match('/^1/', $minutes) ? true : false):
            $minutes = "$minutes минут";
            break;
        case(preg_match('/1$/', $minutes) ? true : false):
            $minutes = "$minutes минута";
            break;
        default:
            $minutes = "$minutes минуты";
            break;
    }
    return "$hours $minutes";
}

echo getTime();