<?php
/**
 * Created by PhpStorm.
 * User: alexandre tomatis
 * Date: 17/11/17
 * Time: 13:27
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use KaptainKool\KaptainKoolBundle\Model\AbstractBaseEntity;
use KaptainKool\KaptainKoolBundle\Model\Traits\TimestampableTrait;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Class Podcast
 *
 * @package AppBundle\Entity
 * @ORM\Entity
 * @Vich\Uploadable
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
     * @var File
     *
     * @Vich\UploadableField(mapping="podcast", fileNameProperty="source", size="123541613155")
     *
     */
    private $sourceFile;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     *
     */
    protected $source;

    /**
     * @var Series
     *
     * @ORM\ManyToOne(targetEntity="Series", inversedBy="podcasts", fetch="EAGER")
     */
    protected $series;

    /**
     * @var Broadcast
     *
     * @ORM\ManyToOne(targetEntity="Broadcast", inversedBy="podcasts", fetch="EAGER")
     */
    protected $broadcast;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Person", inversedBy="authors")
     * @ORM\JoinTable(name="author")
     */
    protected $authors;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Person", inversedBy="guests")
     * @ORM\JoinTable(name="guest")
     */
    protected $guests;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Person", inversedBy="mixeurs")
     * @ORM\JoinTable(name="mixeur")
     */
    protected $mixeurs;

    public function __construct() {
        $this->authors = new ArrayCollection();
        $this->guests = new ArrayCollection();
        $this->mixeurs = new ArrayCollection();
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
     *
     * @param File $sourceFile
     *
     * @return self
     */
    public function setSourceFile(File $sourceFile = null)
    {
        $this->sourceFile = $sourceFile;

        return $this;
    }

    /**
     * @return File|null
     */
    public function getSourceFile()
    {
        return $this->sourceFile;
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
     * @return Series
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Le broadcast est dépendant de la série, on le met donc à jour automatiquement.
     *
     * @param Series $series
     *
     * @return self
     */
    public function setSeries($series)
    {
        $this->series = $series;
        $this->broadcast = $series->getBroadcast();

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
     * @return ArrayCollection
     */
    public function getAuthors() {

        return $this->authors;
    }

    /**
     * @param Person $author
     *
     * @return self
     */
    public function addAuthor(Person $author)
    {
        $this->authors->add($author);

        return $this;
    }

    /**
     * @param Person $author
     *
     * @return self
     */
    public function removeAuthor(Person $author)
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
     * @param Person $guest
     *
     * @return self
     */
    public function addGuest(Person $guest)
    {
        $this->guests->add($guest);

        return $this;
    }

    /**
     * @param Person $guest
     *
     * @return self
     */
    public function removeGuest(Person $guest)
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
     * @param Person $mixeur
     *
     * @return self
     */
    public function addMixeur(Person $mixeur)
    {
        $this->mixeurs->add($mixeur);

        return $this;
    }

    /**
     * @param Person $mixeur
     *
     * @return self
     */
    public function removeMixeur(Person $mixeur)
    {
        $this->mixeurs->remove($mixeur);

        return $this;
    }

}