<?php

namespace challengePaymentBundle\Admin;


use Sonata\AdminBundle\Admin\Admin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class LobbyAdmin extends Admin
{
protected function configureFormFields(FormMapper $formMapper)
{
$formMapper->add('name', 'string');
}

protected function configureDatagridFilters(DatagridMapper $datagridMapper)
{
$datagridMapper->add('name');
}

protected function configureListFields(ListMapper $listMapper)
{
$listMapper->addIdentifier('name');
}
}