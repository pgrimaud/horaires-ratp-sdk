<?php
namespace Ratp;

class Mission
{
    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var Direction $direction
     */
    protected $direction = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var Line $line
     */
    protected $line = null;

    /**
     * @var Perturbation[] $perturbations
     */
    protected $perturbations = null;

    /**
     * @var Station $stationEndLine
     */
    protected $stationEndLine = null;

    /**
     * @var Station[] $stations
     */
    protected $stations = null;

    /**
     * @var string[] $stationsDates
     */
    protected $stationsDates = null;

    /**
     * @var string[] $stationsMessages
     */
    protected $stationsMessages = null;

    /**
     * @var string[] $stationsPlatforms
     */
    protected $stationsPlatforms = null;

    /**
     * @var boolean[] $stationsStops
     */
    protected $stationsStops = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Mission
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Direction
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param Direction $direction
     * @return Mission
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Mission
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Mission
     */
    public function setLine($line)
    {
        $this->line = $line;
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
     * @return Mission
     */
    public function setPerturbations(array $perturbations = null)
    {
        $this->perturbations = $perturbations;
        return $this;
    }

    /**
     * @return Station
     */
    public function getStationEndLine()
    {
        return $this->stationEndLine;
    }

    /**
     * @param Station $stationEndLine
     * @return Mission
     */
    public function setStationEndLine($stationEndLine)
    {
        $this->stationEndLine = $stationEndLine;
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
     * @return Mission
     */
    public function setStations(array $stations = null)
    {
        $this->stations = $stations;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getStationsDates()
    {
        return $this->stationsDates;
    }

    /**
     * @param string[] $stationsDates
     * @return Mission
     */
    public function setStationsDates(array $stationsDates = null)
    {
        $this->stationsDates = $stationsDates;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getStationsMessages()
    {
        return $this->stationsMessages;
    }

    /**
     * @param string[] $stationsMessages
     * @return Mission
     */
    public function setStationsMessages(array $stationsMessages = null)
    {
        $this->stationsMessages = $stationsMessages;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getStationsPlatforms()
    {
        return $this->stationsPlatforms;
    }

    /**
     * @param string[] $stationsPlatforms
     * @return Mission
     */
    public function setStationsPlatforms(array $stationsPlatforms = null)
    {
        $this->stationsPlatforms = $stationsPlatforms;
        return $this;
    }

    /**
     * @return boolean[]
     */
    public function getStationsStops()
    {
        return $this->stationsStops;
    }

    /**
     * @param boolean[] $stationsStops
     * @return Mission
     */
    public function setStationsStops(array $stationsStops = null)
    {
        $this->stationsStops = $stationsStops;
        return $this;
    }

}
