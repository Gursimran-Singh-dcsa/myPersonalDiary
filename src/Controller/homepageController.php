<?php
namespace App\Controller;

use App\Controller\renderingController;
use Symfony\Component\Routing\Annotation\Route;

class homepageController {

    /**
     * @Route("/")
     */

     function homePage(renderingController $renderer) {
        return $renderer->renderTemplate('homepage.html.twig',['name' => 'gursimran']);
     }
}

?>