<?php
namespace Ratp\Response;

use Ratp\GeoPoint;

class GeoPointsResponse
{
    /**
     * @var GeoPoint $return
     */
    protected $return = null;

    /**
     * @param GeoPoint $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return GeoPoint
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param GeoPoint $return
     * @return \Ratp\Response\GeoPointsResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }
}
