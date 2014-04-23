<?php

namespace Cabinet\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MedecinType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('civilite', 'choice', array(
                    'choices' => array('m' => 'Homme', 'f' => 'Femme'),
                    'required' => false,))
                ->add('nom')
                ->add('prenom')
                ->add('dateNaissance')
                ->add('cin')
                ->add('tel')
                ->add('username')
//            ->add('usernameCanonical')
                ->add('email')
//            ->add('emailCanonical')
                ->add('enabled')
//            ->add('salt')
                ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'The password fields must match.',
                    'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options' => array('label' => 'Password'),
                    'second_options' => array('label' => 'Repeat Password'),
                ))
//            ->add('lastLogin')
//            ->add('locked')
//            ->add('expired')
//            ->add('expiresAt')
//            ->add('confirmationToken')
//            ->add('passwordRequestedAt')
                ->add('roles', 'choice', array(
                    'choices' => array('ROLE_USER' => 'ROLE_USER'),
                    'multiple' => true,
                    'data'=>array('ROLE_USER')
                ))
//            ->add('credentialsExpired')
//            ->add('credentialsExpireAt')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Cabinet\UserBundle\Entity\Medecin'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'cabinet_userbundle_medecin';
    }

}
