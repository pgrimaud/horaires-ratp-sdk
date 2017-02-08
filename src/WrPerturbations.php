<?php
namespace Ratp;

class WrPerturbations
{
    /**
     * @var string $argumentMedia
     */
    protected $argumentMedia = null;

    /**
     * @var string $argumentSource
     */
    protected $argumentSource = null;

    /**
     * @var Perturbation[] $perturbations
     */
    protected $perturbations = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getArgumentMedia()
    {
        return $this->argumentMedia;
    }

    /**
     * @param string $argumentMedia
     * @return \Ratp\WrPerturbations
     */
    public function setArgumentMedia($argumentMedia)
    {
        $this->argumentMedia = $argumentMedia;
        return $this;
    }

    /**
     * @return string
     */
    public function getArgumentSource()
    {
        return $this->argumentSource;
    }

    /**
     * @param string $argumentSource
     * @return \Ratp\WrPerturbations
     */
    public function setArgumentSource($argumentSource)
    {
        $this->argumentSource = $argumentSource;
        return $this;
    }

    /**
     * @return Perturbation[]
     */
    public function getPerturbations()
    {
        return $this->perturbations;
    }

    /**
     * @param Perturbation[] $perturbations
     * @return \Ratp\WrPerturbations
     */
    public function setPerturbations(array $perturbations = null)
    {
        $this->perturbations = $perturbations;
        return $this;
    }
}
