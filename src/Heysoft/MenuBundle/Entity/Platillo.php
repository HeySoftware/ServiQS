<?php

namespace Heysoft\MenuBundle\Entity;

/**
 * Platillo
 */
class Platillo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $platillo;

    /**
     * @var float
     */
    private $precio;

    /**
     * @var bool
     */
    private $status;

    /**
     * @var int
     */
    private $duracion;

    /**
     * @var string
     */
    private $ingredientes;

    /**
     * @var string
     */
    private $imagen;

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
     * Set platillo
     *
     * @param string $platillo
     *
     * @return Platillo
     */
    public function setPlatillo($platillo)
    {
        $this->platillo = $platillo;

        return $this;
    }

    /**
     * Get platillo
     *
     * @return string
     */
    public function getPlatillo()
    {
        return $this->platillo;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Platillo
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
     * Set status
     *
     * @param boolean $status
     *
     * @return Platillo
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     *
     * @return Platillo
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return int
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set ingredientes
     *
     * @param string $ingredientes
     *
     * @return Platillo
     */
    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;

        return $this;
    }

    /**
     * Get ingredientes
     *
     * @return string
     */
    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Platillo
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    
    /**
     * @var \Heysoft\MenuBundle\Entity\Categoria
     */
    private $categoria;


    /**
     * Set categoria
     *
     * @param \Heysoft\MenuBundle\Entity\Categoria $categoria
     *
     * @return Platillo
     */
    public function setCategoria(\Heysoft\MenuBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \Heysoft\MenuBundle\Entity\Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $descripciones;


    /**
     * Add descripcione
     *
     * @param \Heysoft\MenuBundle\Entity\DescripcionPedido $descripcione
     *
     * @return Platillo
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
