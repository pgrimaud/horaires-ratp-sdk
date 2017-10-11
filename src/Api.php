<?php
namespace Ratp;

class Api extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
        'getLinesResponse'        => \Ratp\Response\LinesResponse::class,
        'getVersionResponse'      => \Ratp\Response\VersionResponse::class,
        'getStationsResponse'     => \Ratp\Response\StationsResponse::class,
        'getDirectionsResponse'   => \Ratp\Response\DirectionsResponse::class,
        'getMissionsNextResponse' => \Ratp\Response\MissionsNextResponse::class,

        'Direction'    => \Ratp\Direction::class,
        'Directions'   => \Ratp\Directions::class,
        'GeoPoint'     => \Ratp\GeoPoint::class,
        'Line'         => \Ratp\Line::class,
        'Lines'        => \Ratp\Lines::class,
        'MissionsNext' => \Ratp\MissionsNext::class,
        'Perturbation' => \Ratp\Perturbation::class,
        'Reseau'       => \Ratp\Reseau::class,
        'Station'      => \Ratp\Station::class,
        'Stations'     => \Ratp\Stations::class,

        'WrStations'    => \Ratp\WrStations::class,
        'WrMissions'    => \Ratp\WrMissions::class,
        'WrDirections'  => \Ratp\WrDirections::class,
        'WrItineraries' => \Ratp\WrItineraries::class,
    ];

    /**
     * Api constructor.
     * @param null $wsdl
     * @param array $options
     */
    public function __construct($wsdl = null, $options = [])
    {
        $wsdl = $wsdl ?: __DIR__ . '/../data/ratp.wsdl';

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge([
            'features'    => 1,
            'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP, /** RATP TOS **/
            //'trace'       => 1, /** debug only */
        ], $options);

        parent::__construct($wsdl, $options);
    }

    /**
     * @return \Ratp\Response\VersionResponse
     */
    public function getVersion()
    {
        return $this->__soapCall('getVersion', []);
    }

    /**
     * @param Lines $parameters
     * @return \Ratp\Response\LinesResponse
     */
    public function getLines(Lines $parameters)
    {
        return $this->__soapCall('getLines', array($parameters));
    }

    /**
     * @param Stations $parameters
     * @return \Ratp\Response\StationsResponse
     */
    public function getStations(Stations $parameters)
    {
        return $this->__soapCall('getStations', array($parameters));
    }

    /**
     * @param Directions $parameters
     * @return \Ratp\Response\DirectionsResponse
     */
    public function getDirections(Directions $parameters)
    {
        return $this->__soapCall('getDirections', array($parameters));
    }

    /**
     * @param MissionsNext $parameters
     * @return \Ratp\Response\MissionsNextResponse
     */
    public function getMissionsNext(MissionsNext $parameters)
    {
        return $this->__soapCall('getMissionsNext', array($parameters));
    }

    /**
     * @param Perturbations $parameters
     * @return \Ratp\ResponsePerturbationsResponse
     */
    public function getPerturbations(Perturbations $parameters)
    {
        return $this->__soapCall('getPerturbations', array($parameters));
    }
}
