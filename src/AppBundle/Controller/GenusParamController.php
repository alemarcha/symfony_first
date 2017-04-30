<?php
/**
 * Created by PhpStorm.
 * User: alemarcha26
 * Date: 26/3/17
 * Time: 13:43
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Genus;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class GenusParamController extends Controller {


    /**
     * @Route("/genus/new")
     */
    public function newAction()
    {
        $genus = new Genus();
        $genus->setName("Octopus" . rand(1, 100));
        $genus->setSubFamily('Octopodinae');
        $genus->setSpeciesCount(rand(100, 99999));

        $em = $this->getDoctrine()->getManager();
        $em->persist($genus);
        $em->flush();

        return new Response('<html><body>Genus created</body></html>');
    }

    /**
     * @Route("/genus/query")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $genuses = $em->getRepository('AppBundle:Genus')->findAll();

        return $this->render('genus/list.html.twig' , ['genuses' => $genuses]);
    }

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