<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 17/11/17
 * Time: 17:03
 */

namespace KaptainKool\KaptainKoolBundle\Model\Traits;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait TimestampableTrait
 *
 * Défault timestampable field for entity
 *
 * @package KaptainKool\KaptainKoolBundle\Model\Traits
 */
trait TimestampableTrait
{

    /**
     * @var \DateTime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @var \DateTime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    protected $updated;

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

}