<?php
/**
 * Created by PhpStorm.
 * User: alemarcha26
 * Date: 26/3/17
 * Time: 13:43
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusParamTemplateController extends Controller {

    /**
     * @Route("/genusTemplate/{paramsName}")
     * @param $paramsName
     * @return Response
     */
    public function showAction($paramsName)
    {
        return $this->render("genus/show.html.twig", [
            'name' => $paramsName
        ]);

    }

}