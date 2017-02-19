<?php

if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
} else {
    require __DIR__ . '/../../../autoload.php';
}

/**
 * GET ALL LINES OF THE RATP NETWORK
 */

use Ratp\Api;

$lines = new Ratp\Lines();

$api = new Api();

foreach ($api->getLines($lines)->getReturn() as $line) {
    /** @var Ratp\Line $line */
    echo ucwords($line->getReseau()->getCode()) . ' ' . $line->getCode() . ' : ' . $line->getName() . "\n";
}
