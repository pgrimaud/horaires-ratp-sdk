<?php
namespace Ratp\Response;

use Ratp\WrDirections;

class DirectionsResponse
{
    /**
     * @var WrDirections $return
     */
    protected $return = null;

    /**
     * @param WrDirections $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return WrDirections
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param WrDirections $return
     * @return DirectionsResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }
}
