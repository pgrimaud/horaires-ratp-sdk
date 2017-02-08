<?php
namespace Ratp;

class Line
{
    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $codeStif
     */
    protected $codeStif = null;

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

    /**
     * @var string $realm
     */
    protected $realm = null;

    /**
     * @var Reseau $reseau
     */
    protected $reseau = null;


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
     * @return \Ratp\Line
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodeStif()
    {
        return $this->codeStif;
    }

    /**
     * @param string $codeStif
     * @return \Ratp\Line
     */
    public function setCodeStif($codeStif)
    {
        $this->codeStif = $codeStif;
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
     * @return \Ratp\Line
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
     * @return \Ratp\Line
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
     * @return \Ratp\Line
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * @param string $realm
     * @return \Ratp\Line
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;
        return $this;
    }

    /**
     * @return Reseau
     */
    public function getReseau()
    {
        return $this->reseau;
    }

    /**
     * @param Reseau $reseau
     * @return \Ratp\Line
     */
    public function setReseau($reseau)
    {
        $this->reseau = $reseau;
        return $this;
    }
}
