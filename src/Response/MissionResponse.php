<?php
namespace Ratp\Response;

use Mission;

class MissionResponse
{
    /**
     * @var Mission $return
     */
    protected $return = null;

    /**
     * @param Mission $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return Mission
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param Mission $return
     * @return MissionResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }
}
