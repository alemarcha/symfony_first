<?php
/**
 * Created by PhpStorm.
 * User: alemarcha26
 * Date: 26/3/17
 * Time: 13:43
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GenusParamTemplateController extends Controller {

    /**
     * @Route("/genusTemplate/{paramsName}")
     * @param $paramsName
     * @return Response
     */
    public function showAction($paramsName)
    {
        $funFacts = 'Octopuses can change the color of theidddr body in just *three-tenths* of a second!';
        $funFacts = $this->get('markdown.parser')
            ->transform($funFacts);

        return $this->render("genus/show.html.twig", [
            'name' => $paramsName,
            'funFacts' => $funFacts
        ]);

    }

    /**
     * @Route("/genusTemplate/{paramsName}/notes", name="get_show_notes")
     * @Method("GET")
     * @return Response
     */
    public function getNotesAction()
    {
        $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
        ];

        $data = [
            "notes" => $notes,
        ];

        return new JsonResponse($data);

    }

}