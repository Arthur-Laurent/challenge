<?php

namespace challenge\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ppsn','text',array('required'=>false))
                ->add('psn','email',array('required'=>false))
                ->add('psnpassword','password',array('required'=>false))
                ->add('image',new ImageType(),array('required'=>false));

    }

    public function getParent()
    {
        return 'fos_user_profile';
    }

    public function getName()
    {
        return 'app_user_profile';
    }
}