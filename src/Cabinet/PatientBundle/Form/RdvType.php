<?php

namespace Cabinet\PatientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RdvType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('patient')
                ->add('date', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr' => array('class' => 'datepicker'))
                )
                ->add('heure', 'time', array(
                    'widget' => 'single_text',
                    'input'  => 'datetime' 
                ))
                
                
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\PatientBundle\Entity\Rdv'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'cabinet_patientbundle_rdv';
    }

}
