<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ArticleController extends AbstractController
{
	/**
	 * @Route("/{slug}")
	 */
	public function homepage($slug)
	{	
		$comments = [
			'A','B','C',
		];
		//you can do anything here
		//return response
		return $this->render('article/show.html.twig',[
			'title' => ucwords($slug),
			'comments' => $comments,
		]);
		
	}
}
