<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
# use Symfony\Component\HttpFoundation\Response;


class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }
    /**
     * @Route("/news/{slug}", name="article_show")
     */
    public function show($slug)
    {
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];
        //you can do anything here
        //return response

        // dump($slug, $this);
        $article = [
            'title' => 'Title',
            'slug' => 'slug',
            'content' => 'Lorem Ipsum',
        ];


        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'article' => $article,
            'comments' => $comments,
        ]);
    }
}
