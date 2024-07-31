<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route("/", name: "home")]
    public function home(): Response
    {
        return $this->render("index.html.twig");
    }

    #[Route("/contact-us", name: "contact")]
    public function contact(): Response
    {
        return $this->render("contacts.html.twig");
    }

    #[Route("/gallerie", name: "gallerie")]
    public function gallerie(): Response
    {
        return $this->render("gallerie.html.twig");
    }

    #[Route("/disponibilites", name: "disponibilites")]
    public function disponibilites(): Response
    {
        return $this->render("disponibilites.html.twig");
    }

    #[Route("/en-savoir-plus", name: "en-savoir-plus")]
    public function enSavoirPlus(): Response
    {
        return $this->render("en-savoir-plus.html.twig");
    }
}
