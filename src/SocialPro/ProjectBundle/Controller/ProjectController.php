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
    public function indexAction(Request $request)
    {

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('ProjectBundle:Projet');

        $listProjects = $repository->findAll();

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $listProjects,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',3)
        );


        //dump(get_class($paginator));


        return $this->render('ProjectBundle:Project:index.html.twig',array(
            'project' => $result,
        ));
    }

    public function listAction()
    {
        return $this->render();
    }

    public function addAction(Request $request)
    {
        $project = new Projet();
        $form = $this->createForm(ProjetType::class,$project);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $session = $this->getUser()->getId();
            $project->setIdInd($session);
            $em = $this->getDoctrine()->getManager();

            $em->persist($project);
            $em->flush();
            $user = $this->getUser();
            return $this->render('@FOSUser/Profile/show.html.twig',array(
                'user' => $user,
            ));

        }


        $formView = $form->createView();

        return $this->render('@Project/Project/ajout.html.twig',array('form' => $formView));
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

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('ProjectBundle:Projet');

        $project = $repository->find($id);


        return $this->render('ProjectBundle:Project:choix.html.twig',array(
            'project' => $project,
        ));
    }

    public function editAction(Request $request, Projet $project)
    {
        if ($this->getUser()->getId()==$project->getIdInd()){
        $form = $this->createForm(ProjetType::class,$project);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            //$session = $this->getUser()->getId();
            //$project->setIdInd($session);
            $em = $this->getDoctrine()->getManager();

            //$em->persist($project);
            $em->flush();
            $user = $this->getUser();
            return $this->render('@FOSUser/Profile/show.html.twig',array(
                'user' => $user,
            ));

        }


        $formView = $form->createView();

        return $this->render('@Project/Project/modifier.html.twig',array('form' => $formView));
    }
        $user = $this->getUser();
        return $this->render('@FOSUser/Profile/show.html.twig',array(
            'user' => $user,
        ));
    }

}