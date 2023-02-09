<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Route("/", name="web_")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */
    public function index(): Response
    {
        return $this->render("user/form.html.twig");
    }

    /**
     * @Route("/save", methods={"POST"}, name="save")
     */

    public function save(): Response
    {
        return new Response("saving");
    }
}

