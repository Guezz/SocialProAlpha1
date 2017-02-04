<?php

namespace SocialPro\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectBundle:Project:index.html.twig');
    }
    public function listAction()
    {
        return $this->render();
    }
    public function addAction()
    {
        return $this->render();
    }
    public function foundsAction($id)
    {
        return $this->render();
    }
    public function searchAction($id)
    {
        return $this->render();
    }
    public function selectAction($id)
    {
        return $this->render();
    }
    public function editAction($id)
    {
        return $this->render();
    }
}
