<?php

namespace Project\CarRentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
        public function loginAction()
        {
            return $this->render('ProjectCarRentBundle:Login:login.html.twig');
        }
}
