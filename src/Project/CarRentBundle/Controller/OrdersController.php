<?php

namespace Project\CarRentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OrdersController extends Controller
{
    public function ordersAction()
    {
        return $this->render('ProjectCarRentBundle:Orders:orders.html.twig');
    }
}