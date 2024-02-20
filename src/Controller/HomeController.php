<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $questions = [
            [
                'id' => '1',
                'titre' => 'Je suis une super question',
                'contenu' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptate repellendus molestias atque autem quia, voluptates culpa alias rem quas incidunt, ea hic voluptatem, dolorum cumque possimus quae nihil necessitatibus.',
                'rating' => 20,
                'auteur' => [
                    'name' => 'Juliette Mylle',
                    'avatar' => 'https://randomuser.me/api/portraits/women/56.jpg'
                ],
                'nbReponse' => 15
            ],
            [
                'id' => '2',
                'titre' => 'Je suis une super question',
                'contenu' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptate repellendus molestias atque autem quia, voluptates culpa alias rem quas incidunt, ea hic voluptatem, dolorum cumque possimus quae nihil necessitatibus.',
                'rating' => 80,
                'auteur' => [
                    'name' => 'William Lequet',
                    'avatar' => 'https://randomuser.me/api/portraits/men/3.jpg'
                ],
                'nbReponse' => 19
            ],
            [
                'id' => '3',
                'titre' => 'Je suis une super question',
                'contenu' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptate repellendus molestias atque autem quia, voluptates culpa alias rem quas incidunt, ea hic voluptatem, dolorum cumque possimus quae nihil necessitatibus.',
                'rating' => 0,
                'auteur' => [
                    'name' => 'Adrienne Mangin',
                    'avatar' => 'https://randomuser.me/api/portraits/women/84.jpg'
                ],
                'nbReponse' => 3
            ],
            [
                'id' => '4',
                'titre' => 'Je suis une super question',
                'contenu' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptate repellendus molestias atque autem quia, voluptates culpa alias rem quas incidunt, ea hic voluptatem, dolorum cumque possimus quae nihil necessitatibus.',
                'rating' => -5,
                'auteur' => [
                    'name' => 'Romain Peigner',
                    'avatar' => 'https://randomuser.me/api/portraits/men/17.jpg'
                ],
                'nbReponse' => 98
            ],
            ];
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'questions'=> $questions
        ]);
    }
}
