<?php
namespace Ratp;

class Perturbation
{
    /**
     * @var PerturbationCause $cause
     */
    protected $cause = null;

    /**
     * @var PerturbationConsequence $consequence
     */
    protected $consequence = null;

    /**
     * @var string $dateEnd
     */
    protected $dateEnd = null;

    /**
     * @var string $dateStart
     */
    protected $dateStart = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var PerturbationIncident[] $incidents
     */
    protected $incidents = null;

    /**
     * @var string $level
     */
    protected $level = null;

    /**
     * @var Line $line
     */
    protected $line = null;

    /**
     * @var string $media
     */
    protected $media = null;

    /**
     * @var PerturbationMessage $message
     */
    protected $message = null;

    /**
     * @var string $source
     */
    protected $source = null;

    /**
     * @var Station $station
     */
    protected $station = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $timeEnd
     */
    protected $timeEnd = null;

    /**
     * @var string $timeStart
     */
    protected $timeStart = null;

    /**
     * @var string $title
     */
    protected $title = null;


    public function __construct()
    {
    }

    /**
     * @return PerturbationCause
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * @param PerturbationCause $cause
     * @return \Ratp\Perturbation
     */
    public function setCause($cause)
    {
        $this->cause = $cause;
        return $this;
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
     * @return \Ratp\Perturbation
     */
    public function setConsequence($consequence)
    {
        $this->consequence = $consequence;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param string $dateEnd
     * @return \Ratp\Perturbation
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param string $dateStart
     * @return \Ratp\Perturbation
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
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
     * @return \Ratp\Perturbation
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return PerturbationIncident[]
     */
    public function getIncidents()
    {
        return $this->incidents;
    }

    /**
     * @param PerturbationIncident[] $incidents
     * @return \Ratp\Perturbation
     */
    public function setIncidents(array $incidents = null)
    {
        $this->incidents = $incidents;
        return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $level
     * @return \Ratp\Perturbation
     */
    public function setLevel($level)
    {
        $this->level = $level;
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
     * @return \Ratp\Perturbation
     */
    public function setLine($line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param string $media
     * @return \Ratp\Perturbation
     */
    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * @return PerturbationMessage
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param PerturbationMessage $message
     * @return \Ratp\Perturbation
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return \Ratp\Perturbation
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return Station
     */
    public function getStation()
    {
        return $this->station;
    }

    /**
     * @param Station $station
     * @return \Ratp\Perturbation
     */
    public function setStation($station)
    {
        $this->station = $station;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return \Ratp\Perturbation
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }

    /**
     * @param string $timeEnd
     * @return \Ratp\Perturbation
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }

    /**
     * @param string $timeStart
     * @return \Ratp\Perturbation
     */
    public function setTimeStart($timeStart)
    {
        $this->timeStart = $timeStart;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return \Ratp\Perturbation
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
}
