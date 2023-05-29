<?php

namespace App\Controller;

use Api\Services\CallApi as ServicesCallApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuoteController extends AbstractController
{

  

    #[Route('/quote', name: 'app_quote')]
    public function index (ServicesCallApi $serviceCallApi) : Response
    {
        dd($serviceCallApi->getAnimeQuote());
        
        return $this->render('quote/index.html.twig', [
            'controller_name' => 'QuoteController',
        ]);
    }
}
