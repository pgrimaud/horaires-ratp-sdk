<?php

if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
} else {
    require __DIR__ . '/../../../autoload.php';
}

/**
 * GET ALL STATIONS WITH GEO DATA
 */

use Ratp\Api;

$api = new Api();

$geoPoint = new \Ratp\GeoPoint();
// Lambert2
$geoPoint->setX(598875.99978177);
$geoPoint->setY(2429706.0060306);

$stations = new \Ratp\Stations();
$stations->setGp($geoPoint);
// 2000 meters
$stations->setDistances(2000);

$return = $api->getStations($stations)->getReturn();

foreach ($return->getStations() as $station) {
    /** @var \Ratp\Station $station */
    echo $station->getName() . "\n";
}
