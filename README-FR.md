# Horaires RATP SDK

Récupérer les horaires en temps réel pour tout arrêt RER (train), métro, tramway ou bus du réseau RATP.

Vous détestez le protocole SOAP et souhaitez utiliser l'API RATP officielle ? Bienvenue.

**ATTENTION : le WSDL contient quelques termes "*franglish*".**

## Traductions

Ce README est aussi disponible en [anglais](https://github.com/pgrimaud/horaires-ratp-sdk/blob/master/README.md).

## Prérequis

 - Accès à l'API RATP (voir [ici](https://data.ratp.fr/explore/dataset/horaires-temps-reel/))
 - PHP >= 5.6
 - Librairie php-soap (ext-soap extension)

## Installation

```
composer require pgrimaud/horaires-ratp-sdk
```

## Exemple d'utilisation

Récupérer toutes les stations d'une ligne.

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

Plus d'exemples sont disponibles [ici](https://github.com/pgrimaud/horaires-ratp-sdk/tree/master/examples).


## TODO (mais la flemme)

-  Tests unitaires

## Copyrights

Ce projet n'est pas affilié à la [RATP](http://www.ratp.fr).

## Licence

Licence MIT.