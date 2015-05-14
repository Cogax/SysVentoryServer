<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 06/05/15
 * Time: 12:48
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseComponent
 *
 * @ORM\MappedSuperclass
 */
class BaseEntity {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Set id
     *
     * @param string $id
     * @return BaseComponent
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}
