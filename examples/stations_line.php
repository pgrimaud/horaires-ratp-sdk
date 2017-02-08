<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * GET ALL STATIONS OF A SPECIFIC LINE
 */

use Ratp\Api;

$reseau = new \Ratp\Reseau();
$reseau->setCode('metro');

$line = new \Ratp\Line();
$line->setReseau($reseau);
$line->setCode('8');

$station = new \Ratp\Station();
$station->setLine($line);

$stations = new \Ratp\Stations($station);

$api = new Api();

$return = $api->getStations($stations)->getReturn();

foreach ($return->getStations() as $station) {
    /** @var \Ratp\Station $station */
    echo $station->getName() . "\n";
}
