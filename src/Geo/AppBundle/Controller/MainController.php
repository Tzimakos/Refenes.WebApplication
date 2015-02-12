<?php
namespace Geo\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends Controller {

    /**
     * @Route("/", name="Dashboard")
     * @Template()
     */
    public function mainAction() {

      $greetings=array(
        "3" => "Go to bed...",
        "6" => "Mornin' Sunshine",
        "12" => "Good morning",
        "14" => "Good day",
        "17" => "Hello!!",
        "19" => "Good afternoon",
        "21" => "Good evening",
        "23" => "Go to bed...",
      );

      foreach($greetings as $_time=>$_msg){
        if(date("G")<=$_time)
        {
          $msg = $_msg;//"{$_msg}.{$_time}".date("G");
          break;
        }
      }

      $parties = $this->getDoctrine()->getRepository("GeoAppBundle:Party")->findBy(array(), array('createdAt' => 'DESC'));

      return array(
        "parties" => $parties,
        "greeting" => $msg,
      );
    }

    /**
     * @Route("/party/{id}", name="Party")
     * @Template()
     */
    public function partyAction($id) {
        $party = $this->getDoctrine()->getRepository("GeoAppBundle:Party")->findOneById($id);
        return array(
          "party" => $party,
        );
    }

}
