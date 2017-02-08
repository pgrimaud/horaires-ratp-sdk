<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * GET DIRECTIONS OF A SPECIFIC LINE
 */

use Ratp\Api;

$reseau = new \Ratp\Reseau();
$reseau->setCode('metro');

$line = new \Ratp\Line();
$line->setReseau($reseau);
$line->setCode('8');

$directions = new \Ratp\Directions($line);

$api    = new Api();
$return = $api->getDirections($directions)->getReturn();

foreach ($return->getDirections() as $direction) {
    /** @var \Ratp\Direction $direction */
    echo $direction->getName() . "\n";
}
