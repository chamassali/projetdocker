<?php

namespace App\Controller;

use App\Entity\Profile\Profile;
use App\Repository\Profile\ProfileRepository;
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
    public function show(int $id, Profile $profile, ProfileRepository $repo): Response
    {
         
        $profiles = $repo->find($id);

        return $this->render('home/show.html.twig', [
            'profiles' => $profiles,
            'profile' => $profile,
        ]);
    }
}
