<?php

namespace App\Controller;

use App\Services\CallApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuoteController extends AbstractController
{

  

    #[Route('/quote', name: 'app_quote')]
    public function index (CallApi $serviceCallApi) : Response
    {
        $animequote= json_decode($serviceCallApi->getAnimeQuote());
        
        return $this->render('quote/index.html.twig', [
            'animequote' => $animequote,
        ]);
    }
}
