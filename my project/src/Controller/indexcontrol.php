<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class indexcontrol extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    function indexAktion()
    {
        return $this->render('proKino/guest.html.twig');
    }
}