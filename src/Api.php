<?php

namespace Ratp;

class Api extends \SoapClient
{
    /**
     * Client constructor.
     * @param array $options
     * @param null $wsdl
     */
    public function __construct($options = [], $wsdl = null)
    {
        $wsdl = $wsdl ?: __DIR__ . '/../data/ratp.wsdl';

        parent::__construct($wsdl, $options);
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->__soapCall('getVersion', [])->return;
    }
}