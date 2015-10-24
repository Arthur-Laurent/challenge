<?php

namespace challenge\PaymentBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use challenge\PaymentBundle\Entity\Lobby;

class ImageAdmin extends Admin
{
protected function configureFormFields(FormMapper $formMapper)
{
$formMapper->add('url')
            ->add('alt');
}

protected function configureDatagridFilters(DatagridMapper $datagridMapper)
{
$datagridMapper->add('alt');
}

protected function configureListFields(ListMapper $listMapper)
{
$listMapper->addIdentifier('alt')

;
}
}