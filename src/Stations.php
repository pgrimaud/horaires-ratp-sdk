<?php
namespace Ratp;

class Stations
{
    /**
     * @var Station $station
     */
    protected $station = null;

    /**
     * @var GeoPoint $gp
     */
    protected $gp = null;

    /**
     * @var int $distances
     */
    protected $distances = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @var boolean $sortAlpha
     */
    protected $sortAlpha = null;

    /**
     * @param Station $station
     * @param GeoPoint $gp
     * @param int $distances
     * @param int $limit
     * @param boolean $sortAlpha
     */
    public function __construct($station = null, $gp = null, $distances = null, $limit = null, $sortAlpha = null)
    {
        $this->station   = $station;
        $this->gp        = $gp;
        $this->distances = $distances;
        $this->limit     = $limit;
        $this->sortAlpha = $sortAlpha;
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
     * @return \Ratp\Stations
     */
    public function setStation($station)
    {
        $this->station = $station;
        return $this;
    }

    /**
     * @return GeoPoint
     */
    public function getGp()
    {
        return $this->gp;
    }

    /**
     * @param GeoPoint $gp
     * @return \Ratp\Stations
     */
    public function setGp($gp)
    {
        $this->gp = $gp;
        return $this;
    }

    /**
     * @return int
     */
    public function getDistances()
    {
        return $this->distances;
    }

    /**
     * @param int $distances
     * @return \Ratp\Stations
     */
    public function setDistances($distances)
    {
        $this->distances = $distances;
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
     * @return \Ratp\Stations
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSortAlpha()
    {
        return $this->sortAlpha;
    }

    /**
     * @param boolean $sortAlpha
     * @return \Ratp\Stations
     */
    public function setSortAlpha($sortAlpha)
    {
        $this->sortAlpha = $sortAlpha;
        return $this;
    }

}
