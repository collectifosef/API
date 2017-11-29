<?php
/**
 * Created by PhpStorm.
 * User: alexandre tomatis
 * Date: 17/11/17
 * Time: 11:09
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use KaptainKool\KaptainKoolBundle\Model\AbstractBaseEntity;

/**
 * @ORM\Entity
 */
class Category extends AbstractBaseEntity
{

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Broadcast", mappedBy="category")
     */
    protected $broadcasts;

    public function __construct()
    {
        $this->broadcasts = new ArrayCollection();
    }

    /**
     * @param Broadcast $broadcast
     *
     * @return self
     */
    public function addCategory(Broadcast $broadcast)
    {
        $this->broadcasts->add($broadcast);

        return $this;
    }

    /**
     * @param Broadcast $broadcast
     *
     * @return self
     */
    public function removeCategory(Broadcast $broadcast)
    {
        $this->broadcasts->removeElement($broadcast);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getBroadcasts()
    {
        return $this->broadcasts;
    }

}