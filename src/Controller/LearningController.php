<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/learning', name: 'learning')]
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }

    #[Route('/about-me', name: 'about-me')]
    public function aboutMe(): Response
    {
//        $aboutMe = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat at odio a commodo. Sed et elit sed leo varius pulvinar. Duis vitae nisl massa. Vivamus id mi eget mi efficitur hendrerit. Sed quis luctus lectus. Sed et pretium risus. Nulla porttitor, est vel iaculis eleifend, est lacus porttitor sapien, vitae fringilla est elit in odio. Suspendisse vel interdum ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam non augue laoreet magna tincidunt blandit quis a nisl. Praesent sit amet scelerisque nunc. Etiam vestibulum augue vel dui volutpat volutpat. Suspendisse interdum sem id augue elementum, ut ultricies risus aliquet. Nunc vitae sagittis quam. ";
//        return new Response(
//            '<html><body> '.$aboutMe.' </body></html>'
//        );
        return $this->render('learning/about-me.html.twig', ['name' => 'BeCode']);
    }

}
