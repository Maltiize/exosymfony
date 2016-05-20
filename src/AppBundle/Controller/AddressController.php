<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AddressBook;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Address;
use AppBundle\Form\AddAddrType;
use AppBundle\Form\GetUserType;
use Symfony\Component\HttpFoundation\Request;


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
        if($test->getUser()!=$this->getUser())
            return $this->render('adress/error.html.twig', array(
                'error' => "Vous n'êtes pas propriétaire de ce carnet d'addresse"
            ));
        $advert = new Address();
        $form = $this->createForm(AddAddrType::class, $advert);
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
        if($rep->getUser()!=$this->getUser())
            return $this->render('adress/error.html.twig', array(
                'error' => "Vous n'êtes pas propriétaire de ce carnet d'addresse"
            ));
        $em=$this->getDoctrine()->getManager();
        $em->remove($test);
        $em->flush();


        return $this->render('adress/deleteAddr.html.twig', array(
            'id' => $rep->getId()
        ));


    }
    /**
     * @Route("/address/delete/{id}/{iduser}}",name="addrDeleteUser")
     */
    public function deleteUserAction($id,$iduser)
    {
        // On crée un objet Advert
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:AddressBook');

        $repositoryUser = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:User');
        $user=$repositoryUser->find($iduser);
        $rep = $repository->find($id);
        if($rep->getUser()!=$this->getUser())
            return $this->render('adress/error.html.twig', array(
                'error' => "Vous n'êtes pas propriétaire de ce carnet d'addresse"
            ));
        $rep->removeUserAddress($user);
        $this->getDoctrine()->getManager()->flush();


        return $this->render('adress/deleteAddr.html.twig', array(
            'id' => $rep->getId()
        ));


    }
    /**
     * @Route("/address/edit/{id}",name="addrEdit")
     */
    public function editAction($id, Request $request)
    {
        $id = intval($id);
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Address');
        $tmp = $repository->find($id);
        $tmp->getAddressBook();
        if($tmp->getUser()!=$this->getUser())
            return $this->render('adress/error.html.twig', array(
                'error' => "Vous n'êtes pas propriétaire de ce carnet d'addresse"
            ));
        $form = $this->createForm(AddAddrType::class, $tmp);
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
    /**
     * @Route("/address/add/user/{id}",name="addrAddUser")
     */
    public function addUserAction($id, Request $request)
    {
        // On crée un objet Advert
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:AddressBook');
        $repositoryUser = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:User');
        $test = $repository->find($id);
        if($test->getUser()!=$this->getUser())
            return $this->render('adress/error.html.twig', array(
                'error' => "Vous n'êtes pas propriétaire de ce carnet d'addresse"
            ));
        $form = $this->createForm(GetUserType::class, new User());
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $this
                ->getDoctrine()
                ->getManager();
            $li=$repositoryUser->findBy(
                array('nom' => $form['nom']->getData(),
            'prenom' =>$form['prenom']->getData())
            );
            if($li)
                $test->addUser($li[0]);

            $em->flush();

        }
        return $this->render('adress/addAddr.html.twig', array(
            'form' => $form->createView(),
        ));


    }



}

