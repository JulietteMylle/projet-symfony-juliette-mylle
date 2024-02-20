<?php

namespace App\Controller;

use dump;
use App\Form\QuestionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    #[Route('/question/ask', name: 'question_form')]
    public function index(Request $request): Response
    {
        $formQuestion = $this->createForm(QuestionType::class);

        $formQuestion->handleRequest($request);
        if($formQuestion->isSubmitted() && $formQuestion->isValid()){
        }
        return $this->render('question/index.html.twig', [
            'form' => $formQuestion->createView(),
        ]);
    }
    #[Route('/question/{id}', name: 'question_show')]
    public function show(Request $request, string $id): Response
    {
       $question = [
                'titre' => 'Je suis une super question',
                'contenu' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptate repellendus molestias atque autem quia, voluptates culpa alias rem quas incidunt, ea hic voluptatem, dolorum cumque possimus quae nihil necessitatibus.',
                'rating' => 80,
                'auteur' => [
                    'name' => 'William Lequet',
                    'avatar' => 'https://randomuser.me/api/portraits/men/3.jpg'
                ],
                'nbReponse' => 19
            ];
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }
}
