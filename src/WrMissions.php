<?php
namespace Ratp;

class WrMissions
{
    /**
     * @var string $ambiguityMessage
     */
    protected $ambiguityMessage = null;

    /**
     * @var Direction[] $ambiguousDirections
     */
    protected $ambiguousDirections = null;

    /**
     * @var Line[] $ambiguousLines
     */
    protected $ambiguousLines = null;

    /**
     * @var Station[] $ambiguousStations
     */
    protected $ambiguousStations = null;

    /**
     * @var string $argumentDate
     */
    protected $argumentDate = null;

    /**
     * @var Direction $argumentDirection
     */
    protected $argumentDirection = null;

    /**
     * @var Line $argumentLine
     */
    protected $argumentLine = null;

    /**
     * @var Station $argumentStation
     */
    protected $argumentStation = null;

    /**
     * @var Mission[] $missions
     */
    protected $missions = null;

    /**
     * @var Perturbation[] $perturbations
     */
    protected $perturbations = null;


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
     * @return \Ratp\WrMissions
     */
    public function setAmbiguityMessage($ambiguityMessage)
    {
        $this->ambiguityMessage = $ambiguityMessage;
        return $this;
    }

    /**
     * @return Direction[]
     */
    public function getAmbiguousDirections()
    {
        return $this->ambiguousDirections;
    }

    /**
     * @param Direction[] $ambiguousDirections
     * @return \Ratp\WrMissions
     */
    public function setAmbiguousDirections(array $ambiguousDirections = null)
    {
        $this->ambiguousDirections = $ambiguousDirections;
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
     * @return \Ratp\WrMissions
     */
    public function setAmbiguousLines(array $ambiguousLines = null)
    {
        $this->ambiguousLines = $ambiguousLines;
        return $this;
    }

    /**
     * @return Station[]
     */
    public function getAmbiguousStations()
    {
        return $this->ambiguousStations;
    }

    /**
     * @param Station[] $ambiguousStations
     * @return \Ratp\WrMissions
     */
    public function setAmbiguousStations(array $ambiguousStations = null)
    {
        $this->ambiguousStations = $ambiguousStations;
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
     * @return \Ratp\WrMissions
     */
    public function setArgumentDate($argumentDate)
    {
        $this->argumentDate = $argumentDate;
        return $this;
    }

    /**
     * @return Direction
     */
    public function getArgumentDirection()
    {
        return $this->argumentDirection;
    }

    /**
     * @param Direction $argumentDirection
     * @return \Ratp\WrMissions
     */
    public function setArgumentDirection($argumentDirection)
    {
        $this->argumentDirection = $argumentDirection;
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
     * @return \Ratp\WrMissions
     */
    public function setArgumentLine($argumentLine)
    {
        $this->argumentLine = $argumentLine;
        return $this;
    }

    /**
     * @return Station
     */
    public function getArgumentStation()
    {
        return $this->argumentStation;
    }

    /**
     * @param Station $argumentStation
     * @return \Ratp\WrMissions
     */
    public function setArgumentStation($argumentStation)
    {
        $this->argumentStation = $argumentStation;
        return $this;
    }

    /**
     * @return Mission[]
     */
    public function getMissions()
    {
        return $this->missions;
    }

    /**
     * @param Mission[] $missions
     * @return \Ratp\WrMissions
     */
    public function setMissions(array $missions = null)
    {
        $this->missions = $missions;
        return $this;
    }

    /**
     * @return Perturbation[]
     */
    public function getPerturbations()
    {
        return $this->perturbations;
    }

    /**
     * @param Perturbation[] $perturbations
     * @return \Ratp\WrMissions
     */
    public function setPerturbations(array $perturbations = null)
    {
        $this->perturbations = $perturbations;
        return $this;
    }
}
