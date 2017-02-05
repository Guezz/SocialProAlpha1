<?php

namespace SocialPro\ProjectBundle\Controller;

use SocialPro\ProjectBundle\Entity\Projet;
use SocialPro\ProjectBundle\Form\ProjetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProjectController extends Controller
{
    public function indexAction()
    {

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('ProjectBundle:Projet')
        ;

        $listProjects = $repository->findAll();


        return $this->render('ProjectBundle:Project:index.html.twig', array(
            'project' => $listProjects,
        ));
    }
    public function listAction()
    {
        return $this->render();
    }
    public function addAction(Request $request)
    {
        $project = new Projet();
        $form=$this->createForm(ProjetType::class,$project);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $session= $this->getUser()->getId();
            $project->setIdInd($session);
            $em=$this->getDoctrine()->getManager();

            $em->persist($project);
            $em->flush();
            $user = $this->getUser();
            return $this->render('@FOSUser/Profile/show.html.twig', array(
                'user' => $user,
            ));

        }


        $formView=$form->createView();

        return $this->render('@Project/Project/ajout.html.twig', array('form'=>$formView));
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
