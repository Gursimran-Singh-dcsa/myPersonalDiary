<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class renderingController extends AbstractController {
    public function renderTemplate($templatePath, $data) {
        return $this->render($templatePath, $data);
    }
}
?>