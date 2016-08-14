<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * Carrito
 */
class Carrito
{
    /**
     * @var int
     */
    private $id;


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
     * @var \Heysoft\MenuBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \Heysoft\MenuBundle\Entity\User $user
     *
     * @return Carrito
     */
    public function setUser(\Heysoft\MenuBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Heysoft\MenuBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $descripciones;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $platillos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descripciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->platillos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add descripcione
     *
     * @param \Heysoft\MenuBundle\Entity\DescripcionPedido $descripcione
     *
     * @return Carrito
     */
    public function addDescripcione(\Heysoft\MenuBundle\Entity\DescripcionPedido $descripcione)
    {
        $this->descripciones[] = $descripcione;

        return $this;
    }

    /**
     * Remove descripcione
     *
     * @param \Heysoft\MenuBundle\Entity\DescripcionPedido $descripcione
     */
    public function removeDescripcione(\Heysoft\MenuBundle\Entity\DescripcionPedido $descripcione)
    {
        $this->descripciones->removeElement($descripcione);
    }

    /**
     * Get descripciones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDescripciones()
    {
        return $this->descripciones;
    }
}
