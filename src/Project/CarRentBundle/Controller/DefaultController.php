<?php

namespace Project\CarRentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectCarRentBundle:Default:index.html.twig');
    }
	
	public function menuAction($menu)
    {
        return $this->render('ProjectCarRentBundle:Menu:m'.$menu.'.html.twig', array('menu'=>$menu));
    }
	
	public function carAction($car)
    {
        return $this->render('ProjectCarRentBundle:Cars:c'.$car.'.html.twig', array('car'=>$car));
    }

}
