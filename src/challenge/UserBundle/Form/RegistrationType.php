<?php

namespace challenge\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder->add('ppsn','text')
        ->add('psn','email')
        ->add('psnpassword','password');

}

public function getParent()
{
return 'fos_user_registration';
}

public function getName()
{
return 'app_user_registration';
}
}