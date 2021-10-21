<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    /**
     * @Route("/job", name="job")
     */
    public function index(): Response
    {
        return $this->render('job/index.html.twig', [
            'controller_name' => '',
        ]);
    }



    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil(): Response
    {
        return $this->render('job/accueil.html.twig');
    }

    

    /**
     * @Route("/Ajouter", name="Ajouter")
     */
    public function Ajouter(): Response
    {
        return $this->render('job/Ajouter.html.twig' ,[
        'ajouter_name' => 'Page ajout',
    ]);
    }

    /**
     * @Route("/voir/{id}", name="voir",requirements={"id"="\d+"})
     */
    public function voir( $id): Response
    {
        return new Response("details de la fonction voir".$id);
    }

    /**
     * @Route("/modification/{id}", name="modification")
     */
    public function modification($id): Response
    {
        return $this->render('job/modification.html.twig' ,[
        'modification_name' => 'page modification',
    ]);
    }

    /**
     * @Route("/liste", name="liste")
     */
    public function liste(): Response
    {
        return $this->render('job/liste.html.twig' ,[
        'liste_name' => 'page liste',
    ]);
    }


}
