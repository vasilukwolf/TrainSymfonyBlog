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
        return $this->render('BlogBundle:Blog:view.html.twig',
        	[
        		'blog' => $blog,
        	]);
    }

    public function teaserAction(){
        $em = $this->getDoctrine();
        $blogRepository = $em->getRepository('BlogBundle:Blog');
        $blogs = $blogRepository->findAll();
        return $this->render('BlogBundle:Blog:teaser.html.twig',
            [
                'blogs' => $blogs,
            ]);
    }

}
