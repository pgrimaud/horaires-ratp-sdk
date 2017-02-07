<?php
namespace Ratp;

class Direction
{
    /**
     * @var Line $line
     */
    protected $line = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $sens
     */
    protected $sens = null;

    /**
     * @var Station[] $stationsEndLine
     */
    protected $stationsEndLine = null;


    public function __construct()
    {

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
     * @return \Ratp\Direction
     */
    public function setLine($line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \Ratp\Direction
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSens()
    {
        return $this->sens;
    }

    /**
     * @param string $sens
     * @return \Ratp\Direction
     */
    public function setSens($sens)
    {
        $this->sens = $sens;
        return $this;
    }

    /**
     * @return Station[]
     */
    public function getStationsEndLine()
    {
        return $this->stationsEndLine;
    }

    /**
     * @param Station[] $stationsEndLine
     * @return \Ratp\Direction
     */
    public function setStationsEndLine(array $stationsEndLine = null)
    {
        $this->stationsEndLine = $stationsEndLine;
        return $this;
    }
}
