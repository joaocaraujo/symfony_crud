<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Route("/", name="web_")
 */
class UserController
{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */
    public function index(): Response
    {
        return new Response("form");
    }

    /**
     * @Route("/save", methods={"POST"}, name="save")
     */

    public function save(): Response
    {
        return new Response("saving");
    }
}