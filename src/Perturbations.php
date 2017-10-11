<?php
namespace Ratp;

class Perturbations
{
    /**
     * @var Perturbation $perturbation
     */
    protected $perturbation = null;

    /**
     * @var boolean $isXmlText
     */
    protected $isXmlText = null;

    /**
     * @param Perturbation $perturbation
     * @param boolean $isXmlText
     */
    public function __construct($perturbation, $isXmlText)
    {
        $this->perturbation = $perturbation;
        $this->isXmlText    = $isXmlText;
    }

    /**
     * @return Perturbation
     */
    public function getPerturbation()
    {
        return $this->perturbation;
    }

    /**
     * @param Perturbation $perturbation
     * @return Perturbations
     */
    public function setPerturbation($perturbation)
    {
        $this->perturbation = $perturbation;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsXmlText()
    {
        return $this->isXmlText;
    }

    /**
     * @param boolean $isXmlText
     * @return Perturbations
     */
    public function setIsXmlText($isXmlText)
    {
        $this->isXmlText = $isXmlText;
        return $this;
    }

}
