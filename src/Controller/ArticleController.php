<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('page testing');
    }

    /**
     * @Route("/news/{slug}")
     * @param $slug
     * @return Response
     */
    public function show($slug = NULL){
        return new Response(sprintf(
            'Future page to show the article: %s',
            $slug
        ));
    }
}