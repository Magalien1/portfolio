<?php

namespace App\Controller;

use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="project")
     */
    public function index(): Response
    {
        $projects = $this->getDoctrine()->getRepository(Project::class)->findAll();
//        dd($projects);
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
            'projects' => $projects,
        ]);
    }

}
