<?php

namespace challenge\PaymentBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class GameAdmin extends Admin
{
protected function configureFormFields(FormMapper $formMapper)
{
$formMapper->add('name','text',array('label'=>'Nom'))
            ->add('Image', 'sonata_type_model', array(
        'class' => 'challenge\PaymentBundle\Entity\Image',
        'property' => 'url')
    );

}

protected function configureDatagridFilters(DatagridMapper $datagridMapper)
{
$datagridMapper->add('name');
}

protected function configureListFields(ListMapper $listMapper)
{
$listMapper->addIdentifier('name',null,array('label'=>'Nom'));
}
}