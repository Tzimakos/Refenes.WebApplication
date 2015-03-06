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
        $parties = $this->getDoctrine()
            ->getRepository("GeoAppBundle:Party")
            ->findBy(
                array(),
                array(
                    'createdAt' => 'DESC'
                )
            );

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
        $party = $this->getDoctrine()
            ->getRepository("GeoAppBundle:Party")
            ->findOneById($id);

        return array(
            "party" => $party,
        );
    }

    /**
     * @Route("/transaction", defaults={"id" = false})
     * @Route("/transaction/{id}")
     * @Template()
     */
    public function transactionAction(Request $request, $id)
    {
//        $registration = new Registration();
//        $form = $this->createForm(new RegistrationType(), $registration);
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $registration = $form->getData();
//
//            $user = $registration->getUser();
//
//            $hashedPassword = $this->container
//                ->get('security.password_encoder')
//                ->encodePassword($user, $user->getPassword());
//
//            $user->setPassword($hashedPassword);
//
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($user);
//            $em->flush();
//
//            $response = new JsonResponse();
//            return $response;
//
//        }

        return array(
           //'form' => $form->createView(),
        );
    }

}
