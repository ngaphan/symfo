<?php

namespace TroisWA\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {

        $renderedView = $this->render('TroisWABlogBundle:Page:home.html.twig');

        return $renderedView;
    }

    public function contactAction()
    {

        $renderedView = $this->render('TroisWABlogBundle:Page:contact.html.twig');

        return $renderedView;
    }
}
