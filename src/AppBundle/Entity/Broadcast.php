<?php
/**
 * Created by PhpStorm.
 * User: alexandre tomatis
 * Date: 17/11/17
 * Time: 11:41
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use KaptainKool\KaptainKoolBundle\Model\AbstractBaseEntity;
use KaptainKool\KaptainKoolBundle\Model\Traits\TimestampableTrait;

/**
 * @ORM\Entity
 */
class Broadcast extends AbstractBaseEntity
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
    protected $background;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $thumbnail;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="broadcasts", fetch="EAGER")
     */
    protected $category;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Podcast", mappedBy="broadcast")
     */
    protected $podcasts;

    public function __construct()
    {
        $this->podcasts = new ArrayCollection();
    }

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
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * @param string $background
     *
     * @return self
     */
    public function setBackground($background)
    {
        $this->background = $background;

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
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @param Podcast $podcast
     *
     * @return self
     */
    public function addPodcast(Podcast $podcast)
    {
        $this->podcasts->add($podcast);

        return $this;
    }

    /**
     * @param Podcast $podcast
     *
     * @return self
     */
    public function removePodcast(Podcast $podcast)
    {
        $this->podcasts->removeElement($podcast);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getPodcasts()
    {
        return $this->podcasts;
    }

}