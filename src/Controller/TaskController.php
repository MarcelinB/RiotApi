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
        $json = file_get_contents('http://ddragon.leagueoflegends.com/cdn/11.23.1/data/en_US/champion/Azir.json' );
        $pets = json_decode($json, true);
        //dd($pets);
        $img = $pets['data']['Azir']['image']['full'];
        echo '<img src=http://ddragon.leagueoflegends.com/cdn/11.23.1/img/champion/'. $img .' class="img-rounded">';
        return $this->render('task/index.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }
}
