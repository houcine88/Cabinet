<?php

namespace Cabinet\PatientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OperationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date','date',array(
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'attr'=>array('class'=>'date')))
            ->add('type')
            ->add('doit')
            ->add('recu')
//            ->add('fiche')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\PatientBundle\Entity\Operation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cabinet_patientbundle_operation';
    }
}
