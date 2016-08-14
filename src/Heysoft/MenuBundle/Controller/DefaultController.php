<?php

namespace Heysoft\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HeysoftMenuBundle:Default:index.html.twig');
    }

    public function categoriaAction($nombre)
    {
    	$repository = $this->getDoctrine()->getRepository("HeysoftMenuBundle:Platillo");

    	if($nombre == 'Comida_Del_Dia')
        {
            $platillos = $repository->findComidasDelDia();
            $nombre = 'Comida Del Dia';
        }
        else
        {
            $platillos = $repository->findPlatilloPorCategoria($nombre);
        }
        
        if (!$platillos) 
        {
            throw $this->createNotFoundException('La ruta no existe, compa.');
        }

        return $this->render('HeysoftMenuBundle:Menu:showplatillos.html.twig', array('platillos' => $platillos, 'categoria' => $nombre));
    	
    }

    public function comidaDelDiaAction()
    {
        $repository = $this->getDoctrine()->getRepository("HeysoftMenuBundle:Platillo");

        return $this->render('HeysoftMenuBundle:Menu:showplatillos.html.twig', array('platillos' => $platillos, 'categoria' => 'Comida del dia'));
    }
}
