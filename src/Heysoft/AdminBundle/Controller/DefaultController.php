<?php

namespace Heysoft\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HeysoftAdminBundle:Default:index.html.twig');
    }

    public function listarPedidosAction()
    {
    	return $this->render('HeysoftAdminBundle:Pedidos:index.html.twig');
    }
}
