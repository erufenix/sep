<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CheckInController extends AbstractController
{
    /**
     * @Route("/", name="check_in_app")
     */
    public function index()
    {
        return $this->render('check_in/checkin.html.twig', [
            'controller_name' => 'CheckInController',
        ]);
    }
}
