<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/api/v1", name="api")
 */
class UsersController
{
    /**
     * @Route("/list", methods={"GET"})
     */
    public function list(): JsonResponse
    {
        return new JsonResponse(["implementing API list", 404]);
    }

    /**
     * @Route("/register", methods={"POST"})
     */

    public function register(): Response
    {
        return new JsonResponse(["implementing API register", 404]);
    }
}