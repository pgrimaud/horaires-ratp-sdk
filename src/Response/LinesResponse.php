<?php
namespace Ratp\Response;

use Ratp;
use Ratp\Line;

class LinesResponse
{
    /**
     * @var Line $return
     */
    protected $return = null;

    /**
     * @param Line $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return Line
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param Line $return
     * @return LinesResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }
}
