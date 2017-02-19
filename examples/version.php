<?php

if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
} else {
    require __DIR__ . '/../../../autoload.php';
}

/**
 * GET API VERSION
 */

use Ratp\Api;

$api    = new Api();
$result = $api->getVersion();

echo $result->getReturn();
