<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * GET API VERSION
 */

use Ratp\Api;

$api    = new Api();
$result = $api->getVersion();

echo $result->getReturn();
