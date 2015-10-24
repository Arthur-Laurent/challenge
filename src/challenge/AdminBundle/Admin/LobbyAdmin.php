<?php

namespace challenge\AdminBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use challenge\PaymentBundle\Entity\Lobby;

class LobbyAdmin extends Admin
{
protected function configureFormFields(FormMapper $formMapper)
{
$formMapper->add('name','text',array('label'=>'Nom'))
            ->add('description');
}

protected function configureDatagridFilters(DatagridMapper $datagridMapper)
{
$datagridMapper->add('name');
}

protected function configureListFields(ListMapper $listMapper)
{
$listMapper->addIdentifier('name',null,array('label'=>'Nom'))
            ->addIdentifier('description')
;
}
}