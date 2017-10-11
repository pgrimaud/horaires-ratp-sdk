<?php

if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
} else {
    require __DIR__ . '/../../../autoload.php';
}

/**
 * GET STATIONS ON A MISSION
 */

use Ratp\Api;

$line = new \Ratp\Line();
$line->setId('RA');

$mission = new \Ratp\Mission();
$mission->setLine($line);
$mission->setId('ZEMA');

$getMission = new \Ratp\GetMission($mission, date('YmdHi'), false, false);

$api = new Api();

/** @var \Ratp\WrMission $result */
$result = $api->getMission($getMission)->getReturn();

foreach ($result->getMission()->getStations() as $station) {
    echo $station->getName() . PHP_EOL;
}