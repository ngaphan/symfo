<?php

namespace TroisWA\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function listAction()
    {

        $articlesList = [
                0 => [
                    'articleId' => 24,
                    'articleTitle' => 'Premier article',
                    'articleContent' => 'Contenu du premier article'
                ],
                1 => [
                    'articleId' => 28,
                    'articleTitle' => 'Second article',
                    'articleContent' => 'Contenu du second article'
                ],
                2 => [
                    'articleId' => 35,
                    'articleTitle' => 'Trosième article',
                    'articleContent' => 'Contenu du troisième article'
                ]
            ];

        $renderedView = $this->render('TroisWABlogBundle:Article:listArticles.html.twig', array(
            'articlesList' => $articlesList
        ));

        return $renderedView;


    }

    public function showAction($articleId)
    {
        $renderedView = $this->render('TroisWABlogBundle:Article:article.html.twig',array('articleId'=>$articleId));


        return ($renderedView);
    }

}
