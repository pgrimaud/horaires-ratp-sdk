<?php
namespace Ratp;

class Station
{
    /**
     * @var Direction $direction
     */
    protected $direction = null;

    /**
     * @var GeoPoint $geoPointA
     */
    protected $geoPointA = null;

    /**
     * @var GeoPoint $geoPointR
     */
    protected $geoPointR = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string[] $idsNextA
     */
    protected $idsNextA = null;

    /**
     * @var string[] $idsNextR
     */
    protected $idsNextR = null;

    /**
     * @var Line $line
     */
    protected $line = null;

    /**
     * @var string $name
     */
    protected $name = null;


    public function __construct()
    {
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
     * @return \Ratp\Station
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * @return GeoPoint
     */
    public function getGeoPointA()
    {
        return $this->geoPointA;
    }

    /**
     * @param GeoPoint $geoPointA
     * @return \Ratp\Station
     */
    public function setGeoPointA($geoPointA)
    {
        $this->geoPointA = $geoPointA;
        return $this;
    }

    /**
     * @return GeoPoint
     */
    public function getGeoPointR()
    {
        return $this->geoPointR;
    }

    /**
     * @param GeoPoint $geoPointR
     * @return \Ratp\Station
     */
    public function setGeoPointR($geoPointR)
    {
        $this->geoPointR = $geoPointR;
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
     * @return \Ratp\Station
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIdsNextA()
    {
        return $this->idsNextA;
    }

    /**
     * @param string[] $idsNextA
     * @return \Ratp\Station
     */
    public function setIdsNextA(array $idsNextA = null)
    {
        $this->idsNextA = $idsNextA;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIdsNextR()
    {
        return $this->idsNextR;
    }

    /**
     * @param string[] $idsNextR
     * @return \Ratp\Station
     */
    public function setIdsNextR(array $idsNextR = null)
    {
        $this->idsNextR = $idsNextR;
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
     * @return \Ratp\Station
     */
    public function setLine($line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \Ratp\Station
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
