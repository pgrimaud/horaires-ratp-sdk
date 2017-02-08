<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * GET PERTURBATIONS ON RATP NETWORK
 */

use Ratp\Api;

$reseau = new \Ratp\Reseau();
$reseau->setCode('metro');

$line = new \Ratp\Line();
$line->setReseau($reseau);
$line->setCode(8);

$perturbation = new \Ratp\Perturbation();
$perturbation->setLine($line);

$perturbations = new \Ratp\Perturbations(null, 0);

$api = new Api();

/**
 * @todo It does not work :(
 */
print_r($api->getPerturbations($perturbations)->getReturn());
