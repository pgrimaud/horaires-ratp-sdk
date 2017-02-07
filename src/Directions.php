<?php
namespace Ratp;

class Directions
{
    /**
     * @var Line $line
     */
    protected $line = null;

    /**
     * @param Line $line
     */
    public function __construct($line = null)
    {
        $this->line = $line;
    }

    /**
     * @return Line
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param Line $line
     * @return \Ratp\Directions
     */
    public function setLine($line)
    {
        $this->line = $line;
        return $this;
    }
}
