<?php

namespace App\Controller;

use App\Repository\ClubRepository;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CrudClubController extends AbstractController
{
    #[Route('/crud/club', name: 'app_crud_club')]
    public function index(): Response
    {
        return $this->render('crud_club/index.html.twig', [
            'controller_name' => 'CrudClubController',
        ]);
    }

    #[Route('/crud/club/list', name: 'app_crud_club_list')]
    public function list(ClubRepository $repository): Response{
            $Clubs=$repository->findAll();
        return $this->render('crud_club/list.html.twig', ["Clubs"=>$Clubs]);
    }




}
