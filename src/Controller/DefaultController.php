<?php namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController {
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
		//Get Json file
		$content = file_get_contents('../properties-2.json');

		//Decode Json file into array
		$json = json_decode($content, true);

        return $this->render('default/default.html.twig', [
			'title' => 'Hotels',
			'content' => $json,
			'properties' => $json['properties']
        ]);
    }

}