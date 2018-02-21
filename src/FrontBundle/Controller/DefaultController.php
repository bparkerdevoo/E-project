<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //to persiste et fush
        #$em = $this->getDoctrine()->getManager();

        //recuperation de la bdd
        #$repository = $this->getDoctrine()->getRepository(MediaUploads::class);

        #$photos = $repository->findAll();


        // replace this example code with whatever you need
        return $this->render('default/index.html.twig',
            ['image'=>'$photos',
                'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            ]);
    }
}
