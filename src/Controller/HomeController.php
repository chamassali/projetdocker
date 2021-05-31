<?php

namespace App\Controller;

use App\Entity\Profile;
use App\Repository\CitiesRepository;
use App\Repository\ProfileRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     *@Route("/", name="home", methods={"GET"})
     */
    public function index(ProfileRepository $repo): Response
    {
        $profiles = $repo->findAll();
        return $this->render('home/index.html.twig', compact('profiles'));
    }

    /**
     * @Route("/test/{id<[0-9]+>}/{lastName}-{firstName}", name="profile.show")
     */
    public function show(Profile $profile): Response
    {
        return $this->render('home/show.html.twig', compact('profile'));
    }
}
