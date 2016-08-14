<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * PlatilloChico
 */
class PlatilloChico
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $platillochico;

    /**
     * @var float
     */
    private $precio;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set platillochico
     *
     * @param string $platillochico
     *
     * @return PlatilloChico
     */
    public function setPlatillochico($platillochico)
    {
        $this->platillochico = $platillochico;

        return $this;
    }

    /**
     * Get platillochico
     *
     * @return string
     */
    public function getPlatillochico()
    {
        return $this->platillochico;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return PlatilloChico
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $platillos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->platillos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add platillo
     *
     * @param \Heysoft\MenuBundle\Entity\Platillo $platillo
     *
     * @return PlatilloChico
     */
    public function addPlatillo(\Heysoft\MenuBundle\Entity\Platillo $platillo)
    {
        $this->platillos[] = $platillo;

        return $this;
    }

    /**
     * Remove platillo
     *
     * @param \Heysoft\MenuBundle\Entity\Platillo $platillo
     */
    public function removePlatillo(\Heysoft\MenuBundle\Entity\Platillo $platillo)
    {
        $this->platillos->removeElement($platillo);
    }

    /**
     * Get platillos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlatillos()
    {
        return $this->platillos;
    }
}
