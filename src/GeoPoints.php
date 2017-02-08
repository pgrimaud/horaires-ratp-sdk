<?php
namespace Ratp;

class GeoPoints
{
    /**
     * @var GeoPoint $gp
     */
    protected $gp = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @param GeoPoint $gp
     * @param int $limit
     */
    public function __construct($gp = null, $limit = null)
    {
        $this->gp    = $gp;
        $this->limit = $limit;
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
     * @return \Ratp\GeoPoints
     */
    public function setGp($gp)
    {
        $this->gp = $gp;
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
     * @return \Ratp\GeoPoints
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

}
