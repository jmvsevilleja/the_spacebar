<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
# use Symfony\Component\HttpFoundation\Response;


class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('article/index.html.twig');
    }
    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'A',
            'B',
            'C',
        ];
        //you can do anything here
        //return response

        // dump($slug, $this);

        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}
