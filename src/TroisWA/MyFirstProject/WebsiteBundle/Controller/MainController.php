<?php
namespace TroisWA\MyFirstProject\WebsiteBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

# cest un bundle , contient 1 component permet de savoir tout ce quil a dans
# la reponse HTTP
# declarer notre class :

class MainController
{
    public function helloAction()
    {
        $response = new Response("Hello mon petit chat !\n je suis trop content", 404, array('Content-type' => 'application/json'));



        return $response ;
    }
}
