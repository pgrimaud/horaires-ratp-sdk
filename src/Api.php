<?php
namespace Ratp;

class Api extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
        'getLinesResponse'   => \Ratp\Response\LinesResponse::class,
        'getVersionResponse' => \Ratp\Response\VersionResponse::class
    ];

    /**
     * Client constructor.
     * @param array $options
     * @param null $wsdl
     */
    public function __construct($options = [], $wsdl = null)
    {
        $wsdl = $wsdl ?: __DIR__ . '/../data/ratp.wsdl';

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge([
            'features' => 1,
        ], $options);

        parent::__construct($wsdl, $options);
    }

    /**
     * @return mixed
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
}