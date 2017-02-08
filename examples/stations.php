<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * GET ALL STATIONS (LIMIT OF 500)
 */

use Ratp\Api;

$stations = new \Ratp\Stations();

$api = new Api();

$return = $api->getStations($stations)->getReturn();

foreach ($return->getStations() as $station) {
    /** @var \Ratp\Station $station */
    echo $station->getName() . "\n";
}
