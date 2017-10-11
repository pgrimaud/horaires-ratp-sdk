<?php
namespace Ratp;

class StationAcces
{
    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $index
     */
    protected $index = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $timeDaysLabel
     */
    protected $timeDaysLabel = null;

    /**
     * @var string $timeDaysStatus
     */
    protected $timeDaysStatus = null;

    /**
     * @var string $timeEnd
     */
    protected $timeEnd = null;

    /**
     * @var string $timeStart
     */
    protected $timeStart = null;

    /**
     * @var float $x
     */
    protected $x = null;

    /**
     * @var float $y
     */
    protected $y = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return StationAcces
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     * @return StationAcces
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param string $index
     * @return StationAcces
     */
    public function setIndex($index)
    {
        $this->index = $index;
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
     * @return StationAcces
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeDaysLabel()
    {
        return $this->timeDaysLabel;
    }

    /**
     * @param string $timeDaysLabel
     * @return StationAcces
     */
    public function setTimeDaysLabel($timeDaysLabel)
    {
        $this->timeDaysLabel = $timeDaysLabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeDaysStatus()
    {
        return $this->timeDaysStatus;
    }

    /**
     * @param string $timeDaysStatus
     * @return StationAcces
     */
    public function setTimeDaysStatus($timeDaysStatus)
    {
        $this->timeDaysStatus = $timeDaysStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }

    /**
     * @param string $timeEnd
     * @return StationAcces
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }

    /**
     * @param string $timeStart
     * @return StationAcces
     */
    public function setTimeStart($timeStart)
    {
        $this->timeStart = $timeStart;
        return $this;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param float $x
     * @return StationAcces
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $y
     * @return StationAcces
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

}
