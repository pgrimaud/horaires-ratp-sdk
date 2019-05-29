<?php

namespace Ratp;

class WrMission implements AmbiguousInterface
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
     * @var string $argumentDate
     */
    protected $argumentDate = null;

    /**
     * @var Line $argumentLine
     */
    protected $argumentLine = null;

    /**
     * @var Mission $mission
     */
    protected $mission = null;

    /**
     * WrMission constructor.
     */
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
     * @return WrMission
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
     * @return WrMission
     */
    public function setAmbiguousLines(array $ambiguousLines = null)
    {
        $this->ambiguousLines = $ambiguousLines;
        return $this;
    }

    /**
     * @return string
     */
    public function getArgumentDate()
    {
        return $this->argumentDate;
    }

    /**
     * @param string $argumentDate
     * @return WrMission
     */
    public function setArgumentDate($argumentDate)
    {
        $this->argumentDate = $argumentDate;
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
     * @return WrMission
     */
    public function setArgumentLine($argumentLine)
    {
        $this->argumentLine = $argumentLine;
        return $this;
    }

    /**
     * @return Mission
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * @param Mission $mission
     * @return WrMission
     */
    public function setMission($mission)
    {
        $this->mission = $mission;
        return $this;
    }
}
