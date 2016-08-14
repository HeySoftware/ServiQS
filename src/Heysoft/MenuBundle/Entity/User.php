<?php

namespace Heysoft\MenuBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;


    public function __construct()
    {
        parent::__construct();
        $this->saldo = 0;
    }
    /**
     * @var \Heysoft\MenuBundle\Entity\Carrito
     */
    private $carrito;


    /**
     * Set carrito
     *
     * @param \Heysoft\MenuBundle\Entity\Carrito $carrito
     *
     * @return User
     */
    public function setCarrito(\Heysoft\MenuBundle\Entity\Carrito $carrito = null)
    {
        $this->carrito = $carrito;

        return $this;
    }

    /**
     * Get carrito
     *
     * @return \Heysoft\MenuBundle\Entity\Carrito
     */
    public function getCarrito()
    {
        return $this->carrito;
    }
    /**
     * @var float
     */
    private $saldo;


    /**
     * Set saldo
     *
     * @param float $saldo
     *
     * @return User
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return float
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function aumentarSaldo($deposito)
    {
        $this->saldo = $this->saldo + $deposito;
    }

    public function disminuirSaldo($retiro)
    {
        if(! ($this->saldo - $retiro < 0) )
        {
            $this->saldo = $this->saldo - $retiro;
        }
    }
}
