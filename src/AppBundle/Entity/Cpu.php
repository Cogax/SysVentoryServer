<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpu
 *
 * @ORM\Table(name="cpu")
 * @ORM\Entity
 */
class Cpu extends BaseEntity
{
    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="family", type="string", length=255, nullable=true)
     */
    private $family = null;

    /**
     * @var integer
     * @ORM\Column(name="clock", type="integer", nullable=true)
     */
    private $clock = null;

    /**
     * @var integer
     * @ORM\Column(name="cores", type="integer", nullable=true)
     */
    private $cores = null;

    /**
     * Set name
     *
     * @param string $name
     * @return Cpu
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set family
     *
     * @param string $family
     * @return Cpu
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return string 
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set clock
     *
     * @param integer $clock
     * @return Cpu
     */
    public function setClock($clock)
    {
        $this->clock = $clock;

        return $this;
    }

    /**
     * Get clock
     *
     * @return integer 
     */
    public function getClock()
    {
        return $this->clock;
    }

    /**
     * Set cores
     *
     * @param integer $cores
     * @return Cpu
     */
    public function setCores($cores)
    {
        $this->cores = $cores;

        return $this;
    }

    /**
     * Get cores
     *
     * @return integer 
     */
    public function getCores()
    {
        return $this->cores;
    }
}
