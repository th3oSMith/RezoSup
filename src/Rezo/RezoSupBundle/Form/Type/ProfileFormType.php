<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rezo\RezoSupBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraint\UserPassword;

class ProfileFormType extends AbstractType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		
		
        $this->buildUserForm($builder, $options);

        $builder->add('current_password', 'password', array(
            'label' => 'form.current_password',
            'translation_domain' => 'FOSUserBundle',
            'mapped' => false,
            'constraints' => new UserPassword(),
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'profile',
        ));
    }

    public function getName()
    {
        return 'rezo_user_profile';
    }

    /**
     * Builds the embedded form representing the user.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
		
		
        $builder
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('pseudo1')
            ->add('pseudo2')
            ->add('nom')
            ->add('prenom')
            ->add('sexe', 'choice' , array('choices'   => array(
																' '   => ' ',
																'M'   => 'M',
																'F' => 'F')))
            ->add('naissance', 'date', array('years' => range(date('Y')-100, date('Y'))))
            ->add('serveur', 'entity', array(
											'class' => 'RezoRezoSupBundle:Server',
											'property' => 'serveur',
											))
            ->add('channels')
            ->add('ville')
            ->add('url')
            ->add('message')
            ->add('level', 'choice' , array('choices' => array(
																'0'=>'Utilisateur',
																'1'=>'Opérateur',
																'2'=>'Ancien Opérateur toujours actif',
																'3'=>'Ancien Opérateur inactif'		
            )))
            
        ;
    }
}
