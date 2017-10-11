<?php
namespace Ratp;

class PerturbationIncident
{
    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var PerturbationIncidentLine[] $incidentLines
     */
    protected $incidentLines = null;

    /**
     * @var PerturbationMessage $messageGlobal
     */
    protected $messageGlobal = null;

    /**
     * @var string $status
     */
    protected $status = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return PerturbationIncident
     */
    public function setDate($date)
    {
        $this->date = $date;
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
     * @return PerturbationIncident
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return PerturbationIncidentLine[]
     */
    public function getIncidentLines()
    {
        return $this->incidentLines;
    }

    /**
     * @param PerturbationIncidentLine[] $incidentLines
     * @return PerturbationIncident
     */
    public function setIncidentLines(array $incidentLines = null)
    {
        $this->incidentLines = $incidentLines;
        return $this;
    }

    /**
     * @return PerturbationMessage
     */
    public function getMessageGlobal()
    {
        return $this->messageGlobal;
    }

    /**
     * @param PerturbationMessage $messageGlobal
     * @return PerturbationIncident
     */
    public function setMessageGlobal($messageGlobal)
    {
        $this->messageGlobal = $messageGlobal;
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
     * @return PerturbationIncident
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

}
