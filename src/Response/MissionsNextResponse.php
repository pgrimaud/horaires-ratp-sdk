<?php
namespace Ratp\Response;

use Ratp\WrMissions;

class MissionsNextResponse
{
    /**
     * @var WrMissions $return
     */
    protected $return = null;

    /**
     * @param WrMissions $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return WrMissions
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param WrMissions $return
     * @return \Ratp\Response\MissionsNextResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }
}
