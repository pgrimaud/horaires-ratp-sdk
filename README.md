# Horaires RATP SDK

Retrieve real time schedules for any given RER (train), Metro, or Tramway stop in real time.

You hate SOAP protocol and want to use the official RATP API? Welcome here.

**BEWARE : WSDL contains some "*franglish*" such as documentation.**

## Translations

This README file is also available in [french](https://github.com/pgrimaud/horaires-ratp-sdk/blob/master/README-FR.md).

## Requirements

 - Access to the RATP API (see [here](https://data.ratp.fr/explore/dataset/horaires-temps-reel/))
 - PHP>=5.6

## Installation

```
composer require pgrimaud/horaires-ratp-sdk
```

## Basic usage

Get all stations of a line.

```php
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
```

You can see more examples [here](https://github.com/pgrimaud/horaires-ratp-sdk/tree/master/examples).


## TODO (but la flemme)
-  Unit tests

## Copyrights

This project is not affiliated with and not endorsed by the [RATP](http://www.ratp.fr).

## LICENSE
Licensed under the terms of the MIT License.