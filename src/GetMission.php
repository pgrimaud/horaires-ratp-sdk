<?php
namespace Ratp;

class GetMission
{
    /**
     * @var Mission $mission
     */
    protected $mission = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var boolean $stationAll
     */
    protected $stationAll = null;

    /**
     * @var boolean $stationSortAlpha
     */
    protected $stationSortAlpha = null;

    /**
     * @param Mission $mission
     * @param string $date
     * @param boolean $stationAll
     * @param boolean $stationSortAlpha
     */
    public function __construct($mission, $date, $stationAll, $stationSortAlpha)
    {
        $this->mission          = $mission;
        $this->date             = $date;
        $this->stationAll       = $stationAll;
        $this->stationSortAlpha = $stationSortAlpha;
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
     * @return getMission
     */
    public function setMission($mission)
    {
        $this->mission = $mission;
        return $this;
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
     * @return getMission
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getStationAll()
    {
        return $this->stationAll;
    }

    /**
     * @param boolean $stationAll
     * @return getMission
     */
    public function setStationAll($stationAll)
    {
        $this->stationAll = $stationAll;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getStationSortAlpha()
    {
        return $this->stationSortAlpha;
    }

    /**
     * @param boolean $stationSortAlpha
     * @return getMission
     */
    public function setStationSortAlpha($stationSortAlpha)
    {
        $this->stationSortAlpha = $stationSortAlpha;
        return $this;
    }
}
