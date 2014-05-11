<?php


namespace emh\MembresBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class MembreAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                
            ->add('username')
            
            ->add('email')
            
           
            ->add('roles')
           
            ->add('telephonne')
            ->add('FormationsAteliers','entity', array('class'  =>'emhInscriptionBundle:FormationsAteliers',
                                                'property' => 'nomFr'))
           
                
                    ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           ->add('username')
            
            ->add('email')
            
           
            ->add('roles')
           
            ->add('telephonne')
            ->add('formationsAteliers') 
            
         
            
                          

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->addIdentifier('nomFr')
             ->addIdentifier('username')
            
            ->addIdentifier('email')
            
           
            ->addIdentifier('roles')
           
            ->addIdentifier('telephonne')
            ->addIdentifier('formationsAteliers')
      
            
        ;
    }
}