<?php
namespace Ratp;

class WrDirections
{

    /**
     * @var string $ambiguityMessage
     */
    protected $ambiguityMessage = null;

    /**
     * @var Line[] $ambiguousLines
     */
    protected $ambiguousLines = null;

    /**
     * @var Line $argumentLine
     */
    protected $argumentLine = null;

    /**
     * @var Direction[] $directions
     */
    protected $directions = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAmbiguityMessage()
    {
        return $this->ambiguityMessage;
    }

    /**
     * @param string $ambiguityMessage
     * @return \Ratp\WrDirections
     */
    public function setAmbiguityMessage($ambiguityMessage)
    {
        $this->ambiguityMessage = $ambiguityMessage;
        return $this;
    }

    /**
     * @return Line[]
     */
    public function getAmbiguousLines()
    {
        return $this->ambiguousLines;
    }

    /**
     * @param Line[] $ambiguousLines
     * @return \Ratp\WrDirections
     */
    public function setAmbiguousLines(array $ambiguousLines = null)
    {
        $this->ambiguousLines = $ambiguousLines;
        return $this;
    }

    /**
     * @return Line
     */
    public function getArgumentLine()
    {
        return $this->argumentLine;
    }

    /**
     * @param Line $argumentLine
     * @return \Ratp\WrDirections
     */
    public function setArgumentLine($argumentLine)
    {
        $this->argumentLine = $argumentLine;
        return $this;
    }

    /**
     * @return Direction[]
     */
    public function getDirections()
    {
        return $this->directions;
    }

    /**
     * @param Direction[] $directions
     * @return \Ratp\WrDirections
     */
    public function setDirections(array $directions = null)
    {
        $this->directions = $directions;
        return $this;
    }

}
