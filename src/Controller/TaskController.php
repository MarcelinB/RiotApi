<?php

namespace App\Controller;

use App\Service\ChampionManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    /**
     * @Route("/task", name="task")
     */
    public function index(): Response
    {
        $champions = new ChampionManager;
        $dChampions = $champions->getPacket();
        $listFreeChamp = $dChampions->freeChampionIds;

        //Envoie sur le twig mon tableau de lien vers les images de l'Api
        $getAllChamp = new \GetAllChampion();
        $nameChamp = $getAllChamp->getJsonAllChampions();
        return $this->render('task/index.html.twig', [
            'controller_name' => 'TaskController',
            'nameChamp' => $nameChamp
        ]);
    }
}
