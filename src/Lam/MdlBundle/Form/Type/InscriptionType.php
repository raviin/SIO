<?php
namespace Lam\MdlBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Lam\MdlBundle\Entity\formation;

class InscriptionType extends AbstractType
{ 
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('id', 'text', array('label' => 'Identifiant : '))
                ->add('Date', 'text', array('label' => 'Date : '))
                ->add('Horaire', 'text', array('label' => 'Horaire : '))
                ->add('Salle', 'text', array('label' => 'Salle : '))
                ->add('Adresse', 'text', array('label' => 'Adresse : '))
                ->add('Cout', 'text', array('label' => 'Coût : '))
                ->add('Repas', 'text', array('label' => 'Repas : '))
                ->add('DateLimite', 'text', array('label' => 'Date limite : '))
                ->add('lesIntervenants', 'text', array('label' => 'Les intervenants : '))
                ->add('laFormationSport', 'text', array('label' => 'La formation sport : '))
                ->add('laFormationInformatique', 'text', array('label' => 'La formation informatique : '));
    }
    
    public function getName()
    {
        return 'Lam_MdlBundle_visiteurtype';
    }
}
?>