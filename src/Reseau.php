<?php
namespace Ratp;

class Reseau
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
     * @var string $image
     */
    protected $image = null;

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
     * @return \Ratp\Reseau
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
     * @return \Ratp\Reseau
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return \Ratp\Reseau
     */
    public function setImage($image)
    {
        $this->image = $image;
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
     * @return \Ratp\Reseau
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
