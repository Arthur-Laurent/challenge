<?php

namespace challenge\PaymentBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use challenge\PaymentBundle\Entity\Lobby;

class FormuleAdmin extends Admin
{
protected function configureFormFields(FormMapper $formMapper)
{
$formMapper->add('name','text',array('label'=>'Nom'))
            ->add('prix','number')
            ->add('Game','sonata_type_model',array(
                    'label'=>'Jeux',
                    'class' => 'challenge\PaymentBundle\Entity\Game',
                    'property' => 'name',))
            ->add('Lobby','sonata_type_model',array(
                    'class' => 'challenge\PaymentBundle\Entity\Lobby',
                    'property' => 'name',)
    );

}

protected function configureDatagridFilters(DatagridMapper $datagridMapper)
{
$datagridMapper->add('name');
}

protected function configureListFields(ListMapper $listMapper)
{

$listMapper->addIdentifier('name',null,array('label'=>'Nom'))
            ->add('lobby.name',null,array('label'=>'Nom du lobby'))
            ->addIdentifier('prix');

}
}