<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Route("/api/v1", name="api_v1_")
 */
class UserController
{
    /**
     * @Route("/list", methods={"GET"} name="list")
     */
    public function list(): JsonResponse
    {
        return new JsonResponse(["implementing API list", 404]);
    }

    /**
     * @Route("/register", methods={"POST"}, name="register")
     */

    public function register(): Response
    {
        return new JsonResponse(["implementing API register", 404]);
    }
}