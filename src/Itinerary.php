<?php
namespace Ratp;

class Itinerary
{
    /**
     * @var string $dateEnd
     */
    protected $dateEnd = null;

    /**
     * @var string $dateStart
     */
    protected $dateStart = null;

    /**
     * @var int[] $durationsTransit
     */
    protected $durationsTransit = null;

    /**
     * @var GeoPoint $geoPointEnd
     */
    protected $geoPointEnd = null;

    /**
     * @var GeoPoint $geoPointStart
     */
    protected $geoPointStart = null;

    /**
     * @var Mission[] $missions
     */
    protected $missions = null;

    /**
     * @var Tarif $tarif
     */
    protected $tarif = null;


    public function __construct()
    {
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
     * @return Itinerary
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
     * @return Itinerary
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getDurationsTransit()
    {
        return $this->durationsTransit;
    }

    /**
     * @param int[] $durationsTransit
     * @return Itinerary
     */
    public function setDurationsTransit(array $durationsTransit = null)
    {
        $this->durationsTransit = $durationsTransit;
        return $this;
    }

    /**
     * @return GeoPoint
     */
    public function getGeoPointEnd()
    {
        return $this->geoPointEnd;
    }

    /**
     * @param GeoPoint $geoPointEnd
     * @return Itinerary
     */
    public function setGeoPointEnd($geoPointEnd)
    {
        $this->geoPointEnd = $geoPointEnd;
        return $this;
    }

    /**
     * @return GeoPoint
     */
    public function getGeoPointStart()
    {
        return $this->geoPointStart;
    }

    /**
     * @param GeoPoint $geoPointStart
     * @return Itinerary
     */
    public function setGeoPointStart($geoPointStart)
    {
        $this->geoPointStart = $geoPointStart;
        return $this;
    }

    /**
     * @return Mission[]
     */
    public function getMissions()
    {
        return $this->missions;
    }

    /**
     * @param Mission[] $missions
     * @return Itinerary
     */
    public function setMissions(array $missions = null)
    {
        $this->missions = $missions;
        return $this;
    }

    /**
     * @return Tarif
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * @param Tarif $tarif
     * @return Itinerary
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
        return $this;
    }
}
