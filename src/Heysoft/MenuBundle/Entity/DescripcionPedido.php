<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * DescripcionPedido
 */
class DescripcionPedido
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;


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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return DescripcionPedido
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $carritos;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descripcion = "";
        $this->carritos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add carrito
     *
     * @param \Heysoft\MenuBundle\Entity\Carrito $carrito
     *
     * @return DescripcionPedido
     */
    public function addCarrito(\Heysoft\MenuBundle\Entity\Carrito $carrito)
    {
        $this->carritos[] = $carrito;

        return $this;
    }

    /**
     * Remove carrito
     *
     * @param \Heysoft\MenuBundle\Entity\Carrito $carrito
     */
    public function removeCarrito(\Heysoft\MenuBundle\Entity\Carrito $carrito)
    {
        $this->carritos->removeElement($carrito);
    }

    /**
     * Get carritos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCarritos()
    {
        return $this->carritos;
    }

    /**
     * @var \Heysoft\MenuBundle\Entity\Platillo
     */
    private $platillo;


    /**
     * Set platillo
     *
     * @param \Heysoft\MenuBundle\Entity\Platillo $platillo
     *
     * @return DescripcionPedido
     */
    public function setPlatillo(\Heysoft\MenuBundle\Entity\Platillo $platillo = null)
    {
        $this->platillo = $platillo;

        return $this;
    }

    /**
     * Get platillo
     *
     * @return \Heysoft\MenuBundle\Entity\Platillo
     */
    public function getPlatillo()
    {
        return $this->platillo;
    }
}
