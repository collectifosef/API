<?php
/**
 * Created by PhpStorm.
 * User: alexandre tomatis
 * Date: 29/11/17
 * Time: 11:15
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use KaptainKool\KaptainKoolBundle\Model\AbstractBaseEntity;

/**
 * Class Series
 *
 * @package AppBundle\Entity
 * @ORM\Entity
 */
class Series extends AbstractBaseEntity
{

    /**
     * @var Broadcast
     *
     * @ORM\ManyToOne(targetEntity="Broadcast", inversedBy="seriess", fetch="EAGER")
     */
    protected $broadcast;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Podcast", mappedBy="series")
     */
    protected $podcasts;


    public function __construct()
    {
        $this->podcasts = new ArrayCollection();
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

    /**
     * @return ArrayCollection
     */
    public function getPodcasts()
    {
        return $this->podcasts;
    }

    /**
     * Puisque les auteur.e.s ne toucherons que les séries pour l'ajout de podcast, on met a jour
     * automatiquement le broadcast
     *
     * @param Podcast $podcast
     *
     * @return self
     */
    public function addPodcasts(Podcast $podcast)
    {
        $this->podcasts->add($podcast);
        $this->getBroadcast()->addPodcast($podcast);

        return $this;
    }

    /**
     * Puisque les auteur.e.s ne toucherons que les séries pour l'ajout de podcast, on met a jour
     * automatiquement le broadcast
     *
     * @param Podcast $podcast
     *
     * @return self
     */
    public function removePodcasts(Podcast $podcast)
    {
        $this->podcasts->removeElement($podcast);
        $this->getBroadcast()->removePodcast($podcast);

        return $this;
    }

}