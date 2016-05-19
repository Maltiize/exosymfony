<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * Collection get action
     * @var Request $request
     * @return array
     * @Route(name="apiUserAll")
     * @Rest\View
     */
    public function allAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $data = array();
        $entities = $em->getRepository('AppBundle:User')->findAll();
        foreach($entities as $var){
            $tmp['login']=$var->getUsername();
            $tmp['email']=$var->getEmail();
            $data[]=$tmp;
        }
        return array(
            'Users' => $data,
        );
    }


    /**
     * Collection get action
     * @var Request $request
     * @return array
     *
     * @Rest\View
     */
    public function getAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:User')->find($id);

        return array(
            'User' => array(
                'login' => $entity->getUsername(),
                'email' => $entity ->getEmail(),
                'Tel' => $entity->getNumero()
            )
        );
    }
}
