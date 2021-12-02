<?php

namespace App\Service;

class ChampionManager
{

    public static function getPacket()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            'https://euw1.api.riotgames.com/lol/platform/v3/champion-rotations?api_key=RGAPI-fa49d1c7-1b25-4d1a-94af-6fcde62130ab',
            ['verify' => false] //NE FAITES PAS CA A LA MAISON LES ENFANTS* !!
        );

        $body = $res->getBody();
        $rawPacket = json_decode($body);

        return $rawPacket;
    }
}
