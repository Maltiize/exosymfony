<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/",name="index")
     */
    public function indexAction()
    {
        $repositoryBook = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:AddressBook');
        $list=$repositoryBook->findBy(
            array('user' => $this->getUser())
        );

        return $this->render('index.html.twig', array(
            'list' => $list,
        ));
    }
}
