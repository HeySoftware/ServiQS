<?php

namespace Heysoft\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Heysoft\MenuBundle\Entity\Categoria;

class CategoriaController extends Controller
{
	public function CategoriasExistentesAction()
    {	
    	$repository = $this->getDoctrine()->getRepository('HeysoftMenuBundle:Categoria');
        $categorias = $repository->findSinComidaDelDia();

        return $this->render(
            'menu/categorias_list.html.twig',
            array('categorias' => $categorias)
        );
    }
}
