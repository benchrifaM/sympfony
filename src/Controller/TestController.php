<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(Request $request): Response
    {
       /*  echo $request->getPathInfo();
        echo "<hr>";
        echo $request->query->get('info');
        echo "<hr>";
        print_r($request->query->all());
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]); */


        $reponse = new Response();
        $reponse->setContent('hello world');
        $reponse->headers->set('Content-Type','text/plain');
        $reponse->setStatusCode(Response::HTTP_NOT_FOUND);
        $reponse->setCharset('ISO-8859-1');
        return $reponse;
    }
}
