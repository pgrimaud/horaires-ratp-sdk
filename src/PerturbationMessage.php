<?php
namespace Ratp;

class PerturbationMessage
{
    /**
     * @var boolean $mediaSpecific
     */
    protected $mediaSpecific = null;

    /**
     * @var string $text
     */
    protected $text = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var boolean $updated
     */
    protected $updated = null;


    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getMediaSpecific()
    {
        return $this->mediaSpecific;
    }

    /**
     * @param boolean $mediaSpecific
     * @return PerturbationMessage
     */
    public function setMediaSpecific($mediaSpecific)
    {
        $this->mediaSpecific = $mediaSpecific;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return PerturbationMessage
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return PerturbationMessage
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param boolean $updated
     * @return PerturbationMessage
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
    }

}
