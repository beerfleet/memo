<?php

namespace Jvb\Memories\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller {

  public function homepageAction() {
    return $this->render('JvbMemoriesMainBundle:Main:homepage.html.twig', array());
  }

}
