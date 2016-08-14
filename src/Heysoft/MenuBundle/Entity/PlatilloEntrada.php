<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * PlatilloEntrada
 */
class PlatilloEntrada
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $platilloentrada;

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
     * Set platilloentrada
     *
     * @param string $platilloentrada
     *
     * @return PlatilloEntrada
     */
    public function setPlatilloentrada($platilloentrada)
    {
        $this->platilloentrada = $platilloentrada;

        return $this;
    }

    /**
     * Get platilloentrada
     *
     * @return string
     */
    public function getPlatilloentrada()
    {
        return $this->platilloentrada;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return PlatilloEntrada
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
     * @return PlatilloEntrada
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
