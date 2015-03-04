<?php
namespace Geo\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends Controller
{

    /**
     * @Route("/", name="Dashboard")
     * @Template()
     */
    public function mainAction()
    {
        $parties = $this->getDoctrine()->getRepository("GeoAppBundle:Party")->findBy(array(), array('createdAt' => 'DESC'));

        return array(
            "parties" => $parties,
            "greeting" => "Hello!!",
        );
    }

    /**
     * @Route("/party/{id}", name="Party")
     * @Template()
     */
    public function partyAction($id)
    {
        $party = $this->getDoctrine()->getRepository("GeoAppBundle:Party")->findOneById($id);
        return array(
            "party" => $party,
        );
    }

}
