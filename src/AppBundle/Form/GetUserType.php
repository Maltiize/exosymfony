<?php
/**
 * Created by PhpStorm.
 * User: La Patate Démoniaque
 * Date: 18/05/2016
 * Time: 12:02
 */

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class GetUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('submit', SubmitType::class, array('label' => 'YOOOOO'))
        ;
    }


    public function getName()
    {
        return 'getusertype';
    }
}

