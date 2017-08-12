<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function homepageAction()
    {
        return $this->render('::base.html.twig');
    }

    public function blogViewAction($id)
    {
    	$em = $this->getDoctrine();
    	$blogRepository = $em->getRepository('BlogBundle:Blog');
    	$blog = $blogRepository->find($id);
    	var_dump($blog);
        return $this->render('::base.html.twig');
    }

}
