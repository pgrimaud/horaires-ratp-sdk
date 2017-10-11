<?php
namespace Ratp;

class PerturbationConsequence
{
    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $level
     */
    protected $level = null;

    /**
     * @var string $name
     */
    protected $name = null;


    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return PerturbationConsequence
     */
    public function setCode($code)
    {
        $this->code = $code;
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
     * @return PerturbationConsequence
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $level
     * @return PerturbationConsequence
     */
    public function setLevel($level)
    {
        $this->level = $level;
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
     * @return PerturbationConsequence
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
