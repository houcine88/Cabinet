<?php

namespace Cabinet\PatientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PatientType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', 'text',array('attr'=>array('class'=>'form-control')))
                ->add('prenom')
                ->add('dateNaissance','date',array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr'=>array('class'=>'datepicker')))
                ->add('adresse')
                ->add('tel')
                //->add('cin')
        //->add('medecin')
        //->add('fiche')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\PatientBundle\Entity\Patient'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'cabinet_patientbundle_patient';
    }

}
