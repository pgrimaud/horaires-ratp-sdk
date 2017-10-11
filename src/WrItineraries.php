<?php
namespace Ratp;

class WrItineraries
{
    /**
     * @var string $ambiguityMessage
     */
    protected $ambiguityMessage = null;

    /**
     * @var GeoPoint[] $ambiguousGeoPointsEnd
     */
    protected $ambiguousGeoPointsEnd = null;

    /**
     * @var GeoPoint[] $ambiguousGeoPointsStart
     */
    protected $ambiguousGeoPointsStart = null;

    /**
     * @var string $argumentDate
     */
    protected $argumentDate = null;

    /**
     * @var Itinerary[] $itineraries
     */
    protected $itineraries = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAmbiguityMessage()
    {
        return $this->ambiguityMessage;
    }

    /**
     * @param string $ambiguityMessage
     * @return WrItineraries
     */
    public function setAmbiguityMessage($ambiguityMessage)
    {
        $this->ambiguityMessage = $ambiguityMessage;
        return $this;
    }

    /**
     * @return GeoPoint[]
     */
    public function getAmbiguousGeoPointsEnd()
    {
        return $this->ambiguousGeoPointsEnd;
    }

    /**
     * @param GeoPoint[] $ambiguousGeoPointsEnd
     * @return WrItineraries
     */
    public function setAmbiguousGeoPointsEnd(array $ambiguousGeoPointsEnd = null)
    {
        $this->ambiguousGeoPointsEnd = $ambiguousGeoPointsEnd;
        return $this;
    }

    /**
     * @return GeoPoint[]
     */
    public function getAmbiguousGeoPointsStart()
    {
        return $this->ambiguousGeoPointsStart;
    }

    /**
     * @param GeoPoint[] $ambiguousGeoPointsStart
     * @return WrItineraries
     */
    public function setAmbiguousGeoPointsStart(array $ambiguousGeoPointsStart = null)
    {
        $this->ambiguousGeoPointsStart = $ambiguousGeoPointsStart;
        return $this;
    }

    /**
     * @return string
     */
    public function getArgumentDate()
    {
        return $this->argumentDate;
    }

    /**
     * @param string $argumentDate
     * @return WrItineraries
     */
    public function setArgumentDate($argumentDate)
    {
        $this->argumentDate = $argumentDate;
        return $this;
    }

    /**
     * @return Itinerary[]
     */
    public function getItineraries()
    {
        return $this->itineraries;
    }

    /**
     * @param Itinerary[] $itineraries
     * @return WrItineraries
     */
    public function setItineraries(array $itineraries = null)
    {
        $this->itineraries = $itineraries;
        return $this;
    }

}
