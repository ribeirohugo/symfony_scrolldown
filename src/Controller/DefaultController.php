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

    /**
     * @Route("/empty", name="home_empty")
     */
    public function indexEmpty(Request $request)
    {
		//Get Json file
		$content = file_get_contents('../properties-2.json');

		//Decode Json file into array
		$json = json_decode($content, true);

        return $this->render('default/default.html.twig', [
			'title' => 'Hotels',
			'content' => $json,
			'properties' => []
        ]);
    }


    /**
     * @Route("/import", name="webhook_emailbidding")
     */
    public function weebhookEmailBidding(Request $request, Connection $con, TranslatorInterface $translator)
	{
		if ('json' === $request->getContentType()) {

			$encoders = [new JsonEncoder()];
			$normalizers = [new ObjectNormalizer()];

			$data = $request->getContent();
			$serializer = new Serializer($normalizers, $encoders);

			$webhook = $serializer->deserialize($data, Webhook::class, 'json');

			$entityManager = $this->getDoctrine()->getEntityManager();
			$entityManager->persist($webhook);
			$entityManager->flush();

			return new JsonResponse('sucesso');
		} else {

			return new JsonResponse($translator->trans('Erro'));
		}
	}
}