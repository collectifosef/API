<?php
/**
 * Created by PhpStorm.
 * User: alexandre tomatis
 * Date: 17/11/17
 * Time: 15:13
 */
namespace KaptainKool\KaptainKoolBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping\MappedSuperclass;

/**
 * Class AbstractBaseEntity
 *
 * Standar base for entity with id, name and slug.
 *
 * @package KaptainKool\KaptainKoolBundle\Model
 * @MappedSuperclass
 */
abstract class AbstractBaseEntity
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string name
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var string slug
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(type="string")
     */
    protected $slug;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

}