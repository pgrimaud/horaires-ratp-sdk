<?php

namespace Ratp;

class WrStations implements AmbiguousInterface
{
    /**
     * @var string $ambiguityMessage
     */
    protected $ambiguityMessage = null;

    /**
     * @var GeoPoint[] $ambiguousGeoPoints
     */
    protected $ambiguousGeoPoints = null;

    /**
     * @var Line[] $ambiguousLines
     */
    protected $ambiguousLines = null;

    /**
     * @var Direction $argumentDirection
     */
    protected $argumentDirection = null;

    /**
     * @var GeoPoint $argumentGeoPoint
     */
    protected $argumentGeoPoint = null;

    /**
     * @var Line $argumentLine
     */
    protected $argumentLine = null;

    /**
     * @var int[] $distances
     */
    protected $distances = null;

    /**
     * @var Station[] $stations
     */
    protected $stations = null;


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
     * @return \Ratp\WrStations
     */
    public function setAmbiguityMessage($ambiguityMessage)
    {
        $this->ambiguityMessage = $ambiguityMessage;
        return $this;
    }

    /**
     * @return GeoPoint[]
     */
    public function getAmbiguousGeoPoints()
    {
        return $this->ambiguousGeoPoints;
    }

    /**
     * @param GeoPoint[] $ambiguousGeoPoints
     * @return \Ratp\WrStations
     */
    public function setAmbiguousGeoPoints(array $ambiguousGeoPoints = null)
    {
        $this->ambiguousGeoPoints = $ambiguousGeoPoints;
        return $this;
    }

    /**
     * @return Line[]
     */
    public function getAmbiguousLines()
    {
        return $this->ambiguousLines;
    }

    /**
     * @param Line[] $ambiguousLines
     * @return \Ratp\WrStations
     */
    public function setAmbiguousLines(array $ambiguousLines = null)
    {
        $this->ambiguousLines = $ambiguousLines;
        return $this;
    }

    /**
     * @return Direction
     */
    public function getArgumentDirection()
    {
        return $this->argumentDirection;
    }

    /**
     * @param Direction $argumentDirection
     * @return \Ratp\WrStations
     */
    public function setArgumentDirection($argumentDirection)
    {
        $this->argumentDirection = $argumentDirection;
        return $this;
    }

    /**
     * @return GeoPoint
     */
    public function getArgumentGeoPoint()
    {
        return $this->argumentGeoPoint;
    }

    /**
     * @param GeoPoint $argumentGeoPoint
     * @return \Ratp\WrStations
     */
    public function setArgumentGeoPoint($argumentGeoPoint)
    {
        $this->argumentGeoPoint = $argumentGeoPoint;
        return $this;
    }

    /**
     * @return Line
     */
    public function getArgumentLine()
    {
        return $this->argumentLine;
    }

    /**
     * @param Line $argumentLine
     * @return \Ratp\WrStations
     */
    public function setArgumentLine($argumentLine)
    {
        $this->argumentLine = $argumentLine;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getDistances()
    {
        return $this->distances;
    }

    /**
     * @param int[] $distances
     * @return \Ratp\WrStations
     */
    public function setDistances(array $distances = null)
    {
        $this->distances = $distances;
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
     * @return \Ratp\WrStations
     */
    public function setStations(array $stations = null)
    {
        $this->stations = $stations;
        return $this;
    }
}
