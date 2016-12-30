<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    public function randomAction($limit)
    {
        return $this->render('default/random.html.twig', [
            'number' => rand(0, $limit)
        ]);
    }
}
