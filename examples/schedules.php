<?php

if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
} else {
    require __DIR__ . '/../../../autoload.php';
}

/**
 * GET SCHEDULES AT A SPECIFIC STATION ON A SPECIFIC LINE TO A SPECIFIC DIRECTION
 */

use Ratp\Api;

$line = new \Ratp\Line();
$line->setId('M8');

$station = new \Ratp\Station();
$station->setName('Daumesnil');
$station->setLine($line);

$direction = new \Ratp\Direction();
$direction->setSens('R');
$direction->setLine($line);

$mission = new \Ratp\MissionsNext($station, $direction);

$api    = new Api();
$result = $api->getMissionsNext($mission)->getReturn();

echo 'Station   : ' . $result->getArgumentStation()->getName() . "\n";
echo 'Line     : ' . $result->getArgumentStation()->getLine()->getId() . "\n";
echo 'Direction : ' . $result->getArgumentDirection()->getName() . "\n";

foreach ($result->getMissions() as $mission) {
    echo $mission->stationsMessages[0] . "\n";
}
