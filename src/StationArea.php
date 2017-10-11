<?php
namespace Ratp;

class StationArea
{
    /**
     * @var StationAcces[] $access
     */
    protected $access = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var Station[] $stations
     */
    protected $stations = null;

    /**
     * @var Tarif[] $tarifsToParis
     */
    protected $tarifsToParis = null;

    /**
     * @var string $zoneCarteOrange
     */
    protected $zoneCarteOrange = null;


    public function __construct()
    {

    }

    /**
     * @return StationAcces[]
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @param StationAcces[] $access
     * @return StationArea
     */
    public function setAccess(array $access = null)
    {
        $this->access = $access;
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
     * @return StationArea
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return StationArea
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return StationArea
     */
    public function setStations(array $stations = null)
    {
        $this->stations = $stations;
        return $this;
    }

    /**
     * @return Tarif[]
     */
    public function getTarifsToParis()
    {
        return $this->tarifsToParis;
    }

    /**
     * @param Tarif[] $tarifsToParis
     * @return StationArea
     */
    public function setTarifsToParis(array $tarifsToParis = null)
    {
        $this->tarifsToParis = $tarifsToParis;
        return $this;
    }

    /**
     * @return string
     */
    public function getZoneCarteOrange()
    {
        return $this->zoneCarteOrange;
    }

    /**
     * @param string $zoneCarteOrange
     * @return StationArea
     */
    public function setZoneCarteOrange($zoneCarteOrange)
    {
        $this->zoneCarteOrange = $zoneCarteOrange;
        return $this;
    }

}
