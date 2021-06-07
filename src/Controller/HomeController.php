<?php

namespace App\Controller;

use Nzo\UrlEncryptorBundle\Encryptor\Encryptor;
use Nzo\UrlEncryptorBundle\Annotations\ParamDecryptor;
use App\Entity\Profile\Profile;
use App\Repository\Profile\ProfileRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $encryptor;

    public function __construct(Encryptor $encryptor)
    {
        $this->encryptor = $encryptor;
    }

    /**
     *@Route("/", name="home", methods={"GET"})
     */
    public function index(ProfileRepository $repo): Response
    {
        $profiles = $repo->findAll();
        return $this->render('home/index.html.twig', compact('profiles'));
    }

    /**
     * @ParamDecryptor(params={"id", "bar"})
     * @Route("/test/{id}/{lastName}-{firstName}", name="profile.show")
     */
    public function show($id, Profile $profile, ProfileRepository $repo): Response
    {
        $profiles = $repo->find($id);

        return $this->render('home/show.html.twig', [
            'profiles' => $profiles,
            'profile' => $profile,
        ]);
    }
}
