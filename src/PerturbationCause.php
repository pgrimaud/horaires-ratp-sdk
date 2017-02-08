<?php
namespace Ratp;

class PerturbationCause
{
    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $parentId
     */
    protected $parentId = null;

    /**
     * @var string $parentName
     */
    protected $parentName = null;


    public function __construct()
    {
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
     * @return \Ratp\PerturbationCause
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
     * @return \Ratp\PerturbationCause
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param string $parentId
     * @return \Ratp\PerturbationCause
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getParentName()
    {
        return $this->parentName;
    }

    /**
     * @param string $parentName
     * @return \Ratp\PerturbationCause
     */
    public function setParentName($parentName)
    {
        $this->parentName = $parentName;
        return $this;
    }
}
