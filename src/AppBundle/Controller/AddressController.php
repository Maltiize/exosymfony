<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AddressBook;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Address;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AddressController extends Controller
{
    /**
     * @Route("/address/add/{id}",name="addrAdd")
     */
    public function addAction($id, Request $request)
    {
        // On crée un objet Advert
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:AddressBook');
        $test = $repository->find($id);
        $advert = new Address();
        $form = $this->createFormBuilder($advert)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('numero', TextType::class)
            ->add('submit', SubmitType::class, array('label' => 'YOOOOO'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $advert
                ->setNom($form['nom']->getData())
                ->setPrenom($form['prenom']->getData())
                ->setNumero($form['numero']->getData())
                ->setAddressBook($test);
            $em = $this
                ->getDoctrine()
                ->getManager();
            $em->persist($advert);
            $em->flush();

        }
        return $this->render('adress/addAddr.html.twig', array(
            'form' => $form->createView(),
        ));


    }
    /**
     * @Route("/address/delete/{id}",name="addrDelete")
     */
    public function deleteAction($id)
    {
        // On crée un objet Advert
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Address');
        $test = $repository->find($id);
        $rep= $test->getAddressBook();
        $em=$this->getDoctrine()->getManager();
        $em->remove($test);
        $em->flush();


        return $this->render('adress/deleteAddr.html.twig', array(
            'id' => $rep->getId()
        ));


    }
    /**
     * @Route("/address/edit/{id}",name="addrEdit")
     */
    public function editAction($id, Request $request)
    {
        // On crée un objet Advert
        $id = intval($id);
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Address');
        $tmp = $repository->find($id);
        $form = $this->createFormBuilder($tmp)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('numero', TextType::class)
            ->add('submit', SubmitType::class, array('label' => 'YOOOOO'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $tmp
                ->setNom($form['nom']->getData())
                ->setPrenom($form['prenom']->getData())
                ->setNumero($form['numero']->getData());
            $em = $this
                ->getDoctrine()
                ->getManager();
            $em->persist($tmp);
            $em->flush();
        }
        return $this->render('adress/editAddr.html.twig', array(
            'form' => $form->createView(),
            'olddata' => $tmp,

        ));

    }
    /**
     * @Route("/address/{id}",name="addrIndex")
     */
    public function indexAction($id)
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Address');
        $test = $repository->find($id);
        return $this->render('adress/index.html.twig', array(
            'test' => $test,
        ));

    }



}

