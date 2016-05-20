<?php

namespace AppBundle\Controller;
use AppBundle\Entity\AddressBook;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BookAddressController extends Controller
{
    /**
     * @Route("/bookaddress/add",name="addrAddBook")
     */
    public function addAction(Request $request)
    {
        $advert = new AddressBook();
        $form = $this->createFormBuilder($advert)
            ->add('name', TextType::class)
            ->add('submit', SubmitType::class, array('label' => 'YOOOOO'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $advert->setName($form['name']->getData())
                    ->setUser($this->getUser());
            $em = $this
                ->getDoctrine()
                ->getManager();
            $em->persist($advert);
            $em->flush();

        }
        return $this->render('adress/addAddrBook.html.twig', array(
            'form' => $form->createView(),
        ));


    }

    /**
     * @Route("/bookaddress/{id}",name="addrBookIndex")
     */
    public function PrintAction($id)
    {

        $repositoryBook = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:AddressBook');


        $List = $repositoryBook->find($id);
        if($List->getUser()!=$this->getUser())
            return $this->render('adress/error.html.twig', array(
                'error' => "Vous n'êtes pas propriétaire de ce carnet d'addresse"
            ));

        dump($List->getAddress());
        return $this->render('adress/indexBook.html.twig', array(
            'listAddr' => $List->getAddress(),
            'listUser'=>$List->getUserAddress(),
            'idBook' => $id
        ));


    }

}
