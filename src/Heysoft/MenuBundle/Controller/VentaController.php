<?php

namespace Heysoft\MenuBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Payum\Core\PayumBuilder;
use Payum\Core\Payum;

class VentaController extends Controller
{
	public function inicioAction()
    {	
    	$user = $this->getUser();
    	$carrito = $user->getCarrito();

    	return $this->render('HeysoftMenuBundle:Venta:inicio.html.twig', array('carrito' => $carrito));
    }

    public function pagarAction()
    {

    	$payum = (new PayumBuilder())
    	    ->addDefaultStorages()

    	    ->addGateway('paypal_express_checkout', [
    	        'factory' => 'paypal_express_checkout',
    	        'username'  => 'rafael.peralta.blanco@gmail.com',
    	        'password'  => 'rafaelpaypal96',
    	        'signature' => 'change it',
    	        'sandbox'   => true,
    	    ])

    	    ->getPayum()
    	;
    	return new Response('Has pagado');
    }
}