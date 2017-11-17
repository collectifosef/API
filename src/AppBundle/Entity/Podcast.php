<?php
/**
 * Created by PhpStorm.
 * User: alexandre tomatis
 * Date: 17/11/17
 * Time: 13:27
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use KaptainKool\KaptainKoolBundle\Model\AbstractBaseEntity;
use KaptainKool\KaptainKoolBundle\Model\Traits\TimestampableTrait;

/**
 * @ORM\Entity
 */
class Podcast extends AbstractBaseEntity
{
    use TimestampableTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $source;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $thumbnail;

    /**
     * @var Broadcast
     *
     * @ORM\ManyToOne(targetEntity="Broadcast", inversedBy="podcasts", fetch="EAGER")
     */
    protected $broadcast;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     *
     * @return self
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * @return Broadcast
     */
    public function getBroadcast()
    {
        return $this->broadcast;
    }

    /**
     * @param Broadcast $broadcast
     *
     * @return self
     */
    public function setBroadcast($broadcast)
    {
        $this->broadcast = $broadcast;

        return $this;
    }

}