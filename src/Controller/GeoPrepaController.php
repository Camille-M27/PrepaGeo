<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeoPrepaController extends AbstractController
{
    /**
     * @Route("/geo/prepa", name="geo_prepa")
     */
    public function index(): Response
    {
        return $this->render('geo_prepa/index.html.twig', [
            'controller_name' => 'GeoPrepaController',
        ]);
    }
}
