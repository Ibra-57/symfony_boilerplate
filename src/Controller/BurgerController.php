<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BurgerController extends AbstractController
{
    #[Route('/burgers', name: 'burgers_list')]
    public function list(): Response
    {
        $burgers = [
            1 => 'Cheeseburger',
            2 => 'Bacon Burger',
            3 => 'Vegan Burger',
        ];

        return $this->render('burgers_list.html.twig', [
            'burgers' => $burgers,
        ]);
    }

    #[Route('/burger/{id}', name: 'burger_show')]
    public function show(int $id): Response
    {
        $burgers = [
            1 => ['nom' => 'Cheeseburger', 'description' => 'Un délicieux burger avec du fromage fondant.'],
            2 => ['nom' => 'Bacon Burger', 'description' => 'Un burger garni de bacon croustillant.'],
            3 => ['nom' => 'Vegan Burger', 'description' => 'Un burger végétalien plein de saveur.'],
        ];

        if (!isset($burgers[$id])) {
            return new Response("Burger avec l'ID $id non trouvé.", 404);
        }

        $burger = $burgers[$id];

        return $this->render('burger_show.html.twig', [
            'id' => $id,
            'burger' => $burger,
        ]);
    }
}
