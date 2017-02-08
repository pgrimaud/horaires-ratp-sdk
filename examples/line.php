<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * GET INFORMATIONS OF A SPECIFIC LINE
 */

use Ratp\Api;

$reseau = new \Ratp\Reseau();
$reseau->setCode('metro');

$line = new \Ratp\Line();
$line->setCode('8');
$line->setReseau($reseau);

$lines = new \Ratp\Lines($line);

$api    = new Api();
$result = $api->getLines($lines)->getReturn();

print_r($result);
