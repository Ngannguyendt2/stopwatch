<?php
include_once "StopWatch.php";
$stopwatch = new StopWatch();
$stopwatch->start();
$stopwatch->getStarttime();
createArray();
$stopwatch->stop();
$stopwatch->getStoptime();
echo "<br><br>" . $stopwatch->getElapsedTime();
function createArray()
{
    $array = [];
    for ($i = 0; $i < 10000; $i++) {
        $number = rand(1, 10000);
        array_push($array, $number);
    }
    return $array;
}
