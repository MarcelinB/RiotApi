<?php

use App\Entity\Champion;
use App\Service\ChampionManager;

class ChampionTender
{

    /**
     * @input Array $packet : packet fetched from API
     * @return array beer list (name+description)
     */

    function filterPacket()
    {
        $championsName = [];
        $packet = ChampionManager::getPacket();
    return $championsName = [];
    }


}
