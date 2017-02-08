<?php
namespace Ratp;

class MissionsNext
{
    /**
     * @var Station $station
     */
    protected $station = null;

    /**
     * @var Direction $direction
     */
    protected $direction = null;

    /**
     * @var string $dateStart
     */
    protected $dateStart = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @param Station $station
     * @param Direction $direction
     * @param string $dateStart
     * @param int $limit
     */
    public function __construct($station, $direction, $dateStart = null, $limit = null)
    {
        $this->station   = $station;
        $this->direction = $direction;
        $this->dateStart = $dateStart;
        $this->limit     = $limit;
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
     * @return \Ratp\MissionsNext
     */
    public function setStation($station)
    {
        $this->station = $station;
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
     * @return \Ratp\MissionsNext
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
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
     * @return \Ratp\MissionsNext
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return \Ratp\MissionsNext
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
}
