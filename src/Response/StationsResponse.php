<?php
namespace Ratp\Response;

class StationsResponse
{
    /**
     * @var WrStations $return
     */
    protected $return = null;

    /**
     * @param WrStations $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return WrStations
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param WrStations $return
     * @return \Ratp\Response\StationsResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }
}
