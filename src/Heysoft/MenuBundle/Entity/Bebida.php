<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * Bebida
 */
class Bebida
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $bebida;

    /**
     * @var int
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
     * Set bebida
     *
     * @param string $bebida
     *
     * @return Bebida
     */
    public function setBebida($bebida)
    {
        $this->bebida = $bebida;

        return $this;
    }

    /**
     * Get bebida
     *
     * @return string
     */
    public function getBebida()
    {
        return $this->bebida;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     *
     * @return Bebida
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return int
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
     * @return Bebida
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
