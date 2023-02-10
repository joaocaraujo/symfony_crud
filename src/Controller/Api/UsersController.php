<?php

namespace App\Controller\Api;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/api/v1", name="api")
 */
class UsersController extends AbstractController
{
    /**
     * @Route("/list", methods={"GET"})
     */
    public function list(PersistenceManagerRegistry $doctrine): JsonResponse
    {
        $em = $doctrine->getRepository(User::class);

        return new JsonResponse($em->getData());
    }

    /**
     * @Route("/register", methods={"POST"})
     */

    public function register(Request $request, PersistenceManagerRegistry $doctrine): Response
    {
        $data = $request->request->all();

        $user = new User();
        $user->setName($data['name']);
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);

        $em = $doctrine->getManager();
        $em->persist($user);
        $em->flush();

        if($user->getId())
        {
            return new Response("OK", 200);
        } else {
            return new Response("ERROR", 404);
        }
    }
}
