<?php
namespace Ratp;

class Tarif
{
    /**
     * @var float $demiTarif
     */
    protected $demiTarif = null;

    /**
     * @var float $pleinTarif
     */
    protected $pleinTarif = null;

    /**
     * @var Line $viaLine
     */
    protected $viaLine = null;

    /**
     * @var Reseau $viaReseau
     */
    protected $viaReseau = null;


    public function __construct()
    {

    }

    /**
     * @return float
     */
    public function getDemiTarif()
    {
        return $this->demiTarif;
    }

    /**
     * @param float $demiTarif
     * @return Tarif
     */
    public function setDemiTarif($demiTarif)
    {
        $this->demiTarif = $demiTarif;
        return $this;
    }

    /**
     * @return float
     */
    public function getPleinTarif()
    {
        return $this->pleinTarif;
    }

    /**
     * @param float $pleinTarif
     * @return Tarif
     */
    public function setPleinTarif($pleinTarif)
    {
        $this->pleinTarif = $pleinTarif;
        return $this;
    }

    /**
     * @return Line
     */
    public function getViaLine()
    {
        return $this->viaLine;
    }

    /**
     * @param Line $viaLine
     * @return Tarif
     */
    public function setViaLine($viaLine)
    {
        $this->viaLine = $viaLine;
        return $this;
    }

    /**
     * @return Reseau
     */
    public function getViaReseau()
    {
        return $this->viaReseau;
    }

    /**
     * @param Reseau $viaReseau
     * @return Tarif
     */
    public function setViaReseau($viaReseau)
    {
        $this->viaReseau = $viaReseau;
        return $this;
    }

}
