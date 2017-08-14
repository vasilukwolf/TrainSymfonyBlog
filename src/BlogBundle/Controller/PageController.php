<?php
	namespace BlogBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	class PageController extends Controller{
		public function aboutUsAction(){
			return $this->render("BlogBundle:Page:aboutus.html.twig");
		}
	}
