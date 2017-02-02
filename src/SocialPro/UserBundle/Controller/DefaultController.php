<?php

namespace SocialPro\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SocialProUserBundle:Default:index.html.twig');
    }
}
