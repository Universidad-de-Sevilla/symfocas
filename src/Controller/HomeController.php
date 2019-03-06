<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     */
    function index()
    {
        $attributes = $this->get('security.token_storage')->getToken()->getAttributes();
        return $this->render('home', ["attributes" => $attributes]);

    }

}