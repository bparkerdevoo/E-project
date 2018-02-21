<?php

namespace MyScentFactory\UserBundle\Form;

use MyScentFactory\UserBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;
use Sonata\AdminBundle\Form\FormMapper;

class ClientType extends AbstractType
{
    /*protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('connexion')
                ->with('Content', ['class' => 'col-md-9'])
                    ->add('Id_User', 'sonata_type_model', ['class' => 'User', 'property' => 'username', 'email',
             ])
                ->end()
            ->end()

    }*/

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder



            ->add('nom', TextType::class)            ->add('prenom',TextType::class)
            ->add('titre', ChoiceType::class,
                array('choices'=>array(
                                        'Madame'=>'Madame',
                                        'Mademoiselle'=> 'Mademoiselle',
                                        'Monsieur'=> 'Monsieur')))
            ->add('adresse1',TextType::class)
            ->add('adresse2',TextType::class)
            ->add('ville',TextType::class)
            ->add('codePostal',TextType::class)
            ->add('region',TextType::class)
            ->add('mobile',TextType::class)
            ->add('telephone',TextType::class)
            ->add('categorieAdresse',ChoiceType::class,
                array('choices'=>array(
                    'Adresse de facturation'=>true,
                    'Adresse de livraison'=> true,
                    )))
            ->add('dateDeNaissance',BirthdayType::class)
            ->add('dateInscription',DateType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyScentFactory\UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'myscentfactory_userbundle_user';
    }


}
