<?php
namespace Ratp;

class PerturbationIncidentLine
{
    /**
     * @var PerturbationConsequence $consequence
     */
    protected $consequence = null;

    /**
     * @var Line $line
     */
    protected $line = null;

    /**
     * @var PerturbationMessage $messageLarge
     */
    protected $messageLarge = null;

    /**
     * @var PerturbationMessage $messageMedium
     */
    protected $messageMedium = null;

    /**
     * @var PerturbationMessage $messageShort
     */
    protected $messageShort = null;

    /**
     * @var Station[] $stations
     */
    protected $stations = null;


    public function __construct()
    {
    }

    /**
     * @return PerturbationConsequence
     */
    public function getConsequence()
    {
        return $this->consequence;
    }

    /**
     * @param PerturbationConsequence $consequence
     * @return PerturbationIncidentLine
     */
    public function setConsequence($consequence)
    {
        $this->consequence = $consequence;
        return $this;
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
     * @return PerturbationIncidentLine
     */
    public function setLine($line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return PerturbationMessage
     */
    public function getMessageLarge()
    {
        return $this->messageLarge;
    }

    /**
     * @param PerturbationMessage $messageLarge
     * @return PerturbationIncidentLine
     */
    public function setMessageLarge($messageLarge)
    {
        $this->messageLarge = $messageLarge;
        return $this;
    }

    /**
     * @return PerturbationMessage
     */
    public function getMessageMedium()
    {
        return $this->messageMedium;
    }

    /**
     * @param PerturbationMessage $messageMedium
     * @return PerturbationIncidentLine
     */
    public function setMessageMedium($messageMedium)
    {
        $this->messageMedium = $messageMedium;
        return $this;
    }

    /**
     * @return PerturbationMessage
     */
    public function getMessageShort()
    {
        return $this->messageShort;
    }

    /**
     * @param PerturbationMessage $messageShort
     * @return PerturbationIncidentLine
     */
    public function setMessageShort($messageShort)
    {
        $this->messageShort = $messageShort;
        return $this;
    }

    /**
     * @return Station[]
     */
    public function getStations()
    {
        return $this->stations;
    }

    /**
     * @param Station[] $stations
     * @return PerturbationIncidentLine
     */
    public function setStations(array $stations = null)
    {
        $this->stations = $stations;
        return $this;
    }
}
