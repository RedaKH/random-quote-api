<?php

namespace App\Services;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApi {
    private $client;

    public function __construct (HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getAnimeQuote()
    {
        $response = $this->client->request(
            'GET',
            'https://anime-random-quotes.p.rapidapi.com/api/random',
            [
                'headers' => [
                   'X-RapidAPI-Key' => '37ffd9752bmshff5de5f54f66229p1e63c2jsn1b7f825d6d78',
	               'X-RapidAPI-Host' => 'anime-random-quotes.p.rapidapi.com'
                ],
            ]


        );
        return $response->getContent(); 
        
    }


}
    

