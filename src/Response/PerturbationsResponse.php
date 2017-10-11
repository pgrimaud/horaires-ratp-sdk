<?php
namespace Ratp\Response;

use WrPerturbations;

class PerturbationsResponse
{
    /**
     * @var WrPerturbations $return
     */
    protected $return = null;

    /**
     * @param WrPerturbations $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return WrPerturbations
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param WrPerturbations $return
     * @return PerturbationsResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }
}
