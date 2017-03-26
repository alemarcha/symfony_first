<?php
/**
 * Created by PhpStorm.
 * User: alemarcha26
 * Date: 26/3/17
 * Time: 13:43
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusParamController {

    /**
     * @Route("/genus/{paramsName}")
     * @param $paramsName
     * @return Response
     */
    public function showAction($paramsName)
    {
        return new Response("Under the sea: {$paramsName}");
    }

}