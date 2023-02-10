<?php

namespace App\Controller;

use App\Entity\Art;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;

/**
 * @Route("/", name="web_")
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

    public function save(Request $request, PersistenceManagerRegistry $doctrine): Response
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
            return $this->render("user/success.html.twig");
        } else {
            return $this->render("user/erro.html.twig");
        }
    }
}
