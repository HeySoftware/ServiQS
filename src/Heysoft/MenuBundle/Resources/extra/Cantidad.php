<?php

namespace Heysoft\MenuBundle\Resources\extra;

class Cantidad
{
	private $platillo;
	private $cantidad;

	public function __construct($platillo)
	{
		$this->platillo = $platillo;
		$this->cantidad = 1;
	}

	public function getPlatillo()
	{
		return $this->platillo;
	}

	public function getCantidad()
	{
		return $this->cantidad;
	}

	public function aumentar()
	{
		$this->cantidad = $this->cantidad + 1;
	}
}