<?php
/**
 * Created by PhpStorm.
 * User: alexandre tomatis
 * Date: 29/11/17
 * Time: 14:10
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use KaptainKool\KaptainKoolBundle\Model\AbstractBaseEntity;

/**
 * Class person
 *
 * @package AppBundle\Entity
 * @ORM\Entity
 */
class Person extends AbstractBaseEntity
{

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Podcast", mappedBy="authors")
     */
    protected $authors;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Podcast", mappedBy="guests")
     */
    protected $guests;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Podcast", mappedBy="mixeurs")
     */
    protected $mixeurs;

    public function __construct() {
        $this->authors = new ArrayCollection();
        $this->guests = new ArrayCollection();
        $this->mixeurs = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getAuthors() {

        return $this->authors;
    }

    /**
     * @param Podcast $author
     *
     * @return self
     */
    public function addAuthor(Podcast $author)
    {
        $this->authors->add($author);

        return $this;
    }

    /**
     * @param Podcast $author
     *
     * @return self
     */
    public function removeAuthor(Podcast $author)
    {
        $this->authors->remove($author);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getGuests() {

        return $this->guests;
    }

    /**
     * @param Podcast $guest
     *
     * @return self
     */
    public function addGuest(Podcast $guest)
    {
        $this->guests->add($guest);

        return $this;
    }

    /**
     * @param Podcast $guest
     *
     * @return self
     */
    public function removeGuest(Podcast $guest)
    {
        $this->guests->remove($guest);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getMixeurs() {

        return $this->mixeurs;
    }

    /**
     * @param Podcast $mixeur
     *
     * @return self
     */
    public function addMixeur(Podcast $mixeur)
    {
        $this->mixeurs->add($mixeur);

        return $this;
    }

    /**
     * @param Podcast $mixeur
     *
     * @return self
     */
    public function removeMixeur(Podcast $mixeur)
    {
        $this->mixeurs->remove($mixeur);

        return $this;
    }

}